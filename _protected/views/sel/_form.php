<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Blok;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Sel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sel-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
    $bloks = Blok::find()->select('name')->indexBy('id')->column();
    echo $form->field($model, 'blok_id')->widget(Select2::classname(), [
        'data' => $bloks
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
