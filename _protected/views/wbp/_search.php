<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\WbpSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wbp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'wbpid') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'foto') ?>

    <?= $form->field($model, 'blok_id') ?>

    <?php // echo $form->field($model, 'sel_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
