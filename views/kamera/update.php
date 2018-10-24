<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kamera */

$this->title = 'Update Kamera: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kameras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kamera-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
