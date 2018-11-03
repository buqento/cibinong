<?php

namespace app\modules\api\controllers;
use app\modules\api\models\Summary;

class SummaryController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCreateSummary()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $summary = new Summary();
        $summary->scenario = Summary::SCENARIO_CREATE;
        $summary->attributes = \Yii::$app->request->post();
        // return array('status' => true);

        if($summary->validate()){
            $summary->save();
            return array('status' => true, 'data' => 'Summary created successfully.');

        }else{
            return array('status' => false, 'data' => $summary->getErrors());
        }
    }

    public function actionListSummary()
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $summary = Summary::find()->all();
        if(count($summary) > 0){
            return array('status' => true, 'data' => $summary);
        }else{
            return array('status' => false, 'data' => 'No data summary.');
        }
    }

}
