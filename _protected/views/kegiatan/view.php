<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;

$this->title = 'Kegiatan';
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        // 'id',
        'nama',
        'waktu_mulai',
        'waktu_selesai',
        'kamera',
        'behavior',
        'lokasi',
        'peserta',
        'created_at',
    ],
]) ?>