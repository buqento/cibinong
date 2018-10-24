<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Summary;
use app\models\SummaryKegiatan;
use app\models\SummaryBulanan;
use app\models\Kehadiran;

use yii\data\ActiveDataProvider;
use yii\data\ArrayDataProvider;
use yii\httpclient\Client;
use yii\helpers\Json;

class SiteController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        //TOP 10 KEGIATAN
        $kegiatan = SummaryKegiatan::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $kegiatan
        ]);

        //BULANAN
        $summarys = SummaryBulanan::find()->asArray()->all();
        $rows = 0;
        foreach ($summarys as $summary) {
            $labelBulan[] = $summary['bulan'];
            $dataSummaryUpacara[] = $summary['upacara'];
            $dataSummaryApel[] = $summary['apel_pagi'];
            $dataSummaryShalat[] = $summary['shalat'];
            $rows += 1;
        }
        $labelBulan = array_slice($labelBulan, 0, 20);
        $dataSummaryUpacara = array_slice($dataSummaryUpacara, 0, 20);
        $dataSummaryApel = array_slice($dataSummaryApel, 0, 20);
        $dataSummaryShalat = array_slice($dataSummaryShalat, 0, 20);

        //ABSENSI
        $kehadirans = Kehadiran::find()->asArray()->all();
        $rows = 0;
        foreach ($kehadirans as $kehadiran) {
            $labelKehadiran[] = $kehadiran['judul'];
            $dataKehadiranUpacara[] = $kehadiran['upacara'];
            $dataKehadiranApel[] = $kehadiran['apel_pagi'];
            $dataKehadiranshalat[] = $kehadiran['shalat'];
            $rows += 1;
        }
        $labelKehadiran = array_slice($labelKehadiran, 0, 20);
        $dataKehadiranUpacara = array_slice($dataKehadiranUpacara, 0, 20);
        $dataKehadiranApel = array_slice($dataKehadiranApel, 0, 20);
        $dataKehadiranshalat = array_slice($dataKehadiranshalat, 0, 20);

        return $this->render('index', [
            'dataProvider' => $dataProvider,

            'labelKehadiran' => $labelKehadiran,
            'dataKehadiranUpacara' => $dataKehadiranUpacara,
            'dataKehadiranApel' => $dataKehadiranApel,
            'dataKehadiranshalat' => $dataKehadiranshalat,

            'labelBulan' => $labelBulan,
            'dataSummaryUpacara' => $dataSummaryUpacara,
            'dataSummaryApel' => $dataSummaryApel,
            'dataSummaryShalat' => $dataSummaryShalat
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

}
