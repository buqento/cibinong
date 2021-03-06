<?php

namespace app\controllers;

use Yii;
use app\models\Alarm;
use app\models\AlarmSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use yii\httpclient\Client;
use yii\helpers\Json;

class AlarmController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        //READ DATA FROM API
        // $client = new Client();
        // $response = $client->createRequest()
        //     ->setUrl('http://localhost/yiiapi/web/index.php/alarms')
        //     ->addHeaders(['content-type' => 'application/json'])
        //     ->send();
        // $data = Json::decode($response->content);
        // $dataProvider = new ArrayDataProvider([
        //     'allModels' => $data,
        //     'pagination' => [
        //         'pageSize' => 10,
        //     ],
        // ]);
        // return $this->render('index', [
        //     'dataProvider' => $dataProvider,
        // ]);


        $searchModel = new AlarmSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionCreate()
    {
        $model = new Alarm();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionDisable($id)
    {

        Yii::$app->db->createCommand('UPDATE alarm SET status=1 WHERE id='.$id)
             ->queryScalar();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Alarm::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}