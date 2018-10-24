<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Kegiatan;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\AbsensiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="absensi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php
    $kegiatan = Kegiatan::find()->select('nama')->indexBy('id')->column();    
    echo $form->field($model, 'kegiatan_id')->widget(
        Select2::classname(), [
            'data' => $kegiatan
        ])
    ?>
    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
