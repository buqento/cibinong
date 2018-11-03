<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Sel */

$this->title = 'Update Sel';
$this->params['breadcrumbs'][] = ['label' => 'Sel', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sel-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
