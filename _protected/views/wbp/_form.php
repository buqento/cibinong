<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use kartik\depdrop\DepDrop;
use app\models\Blok;
/* @var $this yii\web\View */
/* @var $model app\models\Wbp */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wbp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'wbpid')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'foto')->textInput(['maxlength' => true]) ?>

    <?php 
        $bloks = Blok::find()->select(['name'])->indexBy('id')->column();
        echo $form->field($model, 'blok_id')->widget(Select2::classname(), [
            'data' => $bloks,
            'options' => ['placeholder' => 'Pilih Blok', 'id' => 'blok-id'],
        ]);
    ?>

    <?php
        echo $form->field($model, 'sel_id')->widget(DepDrop::classname(), [
            'type'=>DepDrop::TYPE_SELECT2,
            'options'=>['prompt' => 'Pilih Sel', 'id' => 'sel-id'],
            'pluginOptions'=>[
                'depends'=>['blok-id'],
                'placeholder'=>'Pilih Sel',
                'url'=>Url::to(['/kegiatan/sel']),
                'loadingText'=>'Loading...',
            ],

        ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
