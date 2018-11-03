<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Absensi */

$this->title = $model->wbp_wbpid;
$this->params['breadcrumbs'][] = ['label' => 'Absensis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="absensi-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'wbp_wbpid',
            'status',
            'snapshot',
            'alasan',
            'kamera',
            'lokasi',
            'kegiatan_id',
            'tanggal',
        ],
    ]) ?>

</div>
