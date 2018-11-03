<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Alarm';
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'kegiatan_id',
        'waktu',
        'kamera',
        'wbp_id',
        'nama_wbp',
        'snapshot',
    ],
]) ?>