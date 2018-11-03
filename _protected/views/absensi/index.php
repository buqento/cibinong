<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AbsensiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Absensi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absensi-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'wbp_wbpid',
            // 'status',
            'snapshot',
            'alasan',
            'kamera',
            'lokasi',
            // 'kegiatan_id',
            [
                'attribute' => 'kegiatan_id',
                'value' => 
                function($data){
                    return $data->kegiatan->nama;
                }
            ],
            'tanggal',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update}',
                'contentOptions' => ['style' => 'width:105px; white-space: normal;']
            ],
        ],
    ]); ?>
</div>
