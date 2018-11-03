<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Wbp;

/* @var $this yii\web\View */
/* @var $model app\models\Absensi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absensi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'wbp_wbpid')->dropdownList($wbps) ?>

    <?php // $form->field($model, 'status')->dropdownList(['1' => 'Hadir', '2' => 'Tidak Hadir']) ?>

    <?php // $form->field($model, 'snapshot')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alasan')->textarea(['row' => 3]) ?>

    <?php // $form->field($model, 'kamera')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?php // $form->field($model, 'kegiatan_id')->textInput() ?>

    <?php // $form->field($model, 'tanggal')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
