<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Kegiatan';
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        'nama',
        'waktu_mulai',
        'waktu_selesai',
        'kamera',
        'behavior',
        'lokasi',
        // 'peserta',
        //'created_at',

        [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:105px; white-space: normal;']
        ],
    ],
]); ?>
