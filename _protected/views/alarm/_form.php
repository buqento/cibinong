<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Alarm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="alarm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kegiatan_id')->textInput() ?>

    <?= $form->field($model, 'waktu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kamera')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wbp_id')->textInput() ?>

    <?= $form->field($model, 'nama_wbp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'snapshot')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
