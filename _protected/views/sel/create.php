<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sel */

$this->title = 'Tambah Sel';
$this->params['breadcrumbs'][] = ['label' => 'Sel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sel-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
