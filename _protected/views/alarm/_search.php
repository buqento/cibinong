<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AlarmSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alarm-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kegiatan_id') ?>

    <?= $form->field($model, 'waktu') ?>

    <?= $form->field($model, 'kamera') ?>

    <?= $form->field($model, 'wbp_id') ?>

    <?php // echo $form->field($model, 'nama_wbp') ?>

    <?php // echo $form->field($model, 'snapshot') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
