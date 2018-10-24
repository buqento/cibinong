<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Absensi';
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    // 'summary' => false,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        'wbp_id',
        'nama',
        'snapshot',
        'alasan',
        'kamera',
        'lokasi',
        //'kegiatan_id',

        // ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>

