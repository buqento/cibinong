<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Kamera';
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'kamera_id',
        'nama',
        'lokasi',
        'created_at',
    ],
]) ?>