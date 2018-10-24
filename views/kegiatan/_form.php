<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row">

    <div class="col-md-6">
    
        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'waktu_mulai')->widget(TimePicker::classname(), []) ?>

        <?= $form->field($model, 'waktu_selesai')->widget(TimePicker::classname(), []) ?>

        <?= $form->field($model, 'kamera')->textInput(['maxlength' => true]) ?>

    </div>

    <div class="col-md-6">

        <?= $form->field($model, 'behavior')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'peserta')->textInput() ?>
    </div>

</div>

<br>

<div class="row">
    <div class="ml-auto col-md-2">
        <?= Html::resetButton('Reset', ['class' => 'btn btn-line btn-line-common btn-block text-center']) ?>
    </div>
    <div class="col-md-2">
        <?= Html::submitButton('Tambah', ['class' => 'btn btn-green btn-block']) ?>
    </div>
</div>

<?php ActiveForm::end(); ?>