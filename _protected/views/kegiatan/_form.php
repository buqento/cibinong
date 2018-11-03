<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\time\TimePicker;
use app\models\Kamera;
use app\models\Behavior;
use app\models\Wbp;
use app\models\Blok;
use kartik\select2\Select2;

use kartik\depdrop\DepDrop;
use yii\helpers\Url;
?>

<?php $form = ActiveForm::begin(); ?>

<div class="row">

    <div class="col-md-6">
    
        <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'waktu_mulai')->widget(TimePicker::classname(), []) ?>

        <?= $form->field($model, 'waktu_selesai')->widget(TimePicker::classname(), []) ?>

        <?php 
            $kameras = Kamera::find()->select(['nama'])->indexBy('id')->column();
            echo $form->field($model, 'kamera')->widget(Select2::classname(), [
                'data' => $kameras,
                'options' => ['placeholder' => 'Pilih Kamera', 'multiple' => true],
            ]);
        ?>

    </div>

    <div class="col-md-6">

        <?php 
            $behaviors = Behavior::find()->select(['nama'])->indexBy('id')->column();
            echo $form->field($model, 'behavior')->widget(Select2::classname(), [
                'data' => $behaviors,
                'options' => ['placeholder' => 'Pilih behavior', 'multiple' => true],
            ]);
        ?>

        <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

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

        <?php
            echo $form->field($model, 'peserta')->widget(DepDrop::classname(), [
                'type'=>DepDrop::TYPE_SELECT2,
                'options'=>['prompt' => 'Pilih Peserta', 'multiple' => true],
                'pluginOptions'=>[
                    'depends'=>['blok-id', 'sel-id'],
                    'placeholder'=>'Pilih Peserta',
                    'url'=>Url::to(['/kegiatan/peserta']),
                    'loadingText'=>'Loading...',
                ],

            ]);
        ?>

        <?php 
            // $wbps = Wbp::find()->select(['nama'])->indexBy('wbpid')->column();
            // echo $form->field($model, 'peserta')->widget(Select2::classname(), [
            //     'data' => $wbps,
            //     'options' => ['placeholder' => 'Pilih WBP', 'multiple' => true],
            // ]);
        ?>

        <div class="form-group">
            <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        </div>

    </div>

</div>

<?php ActiveForm::end(); ?>