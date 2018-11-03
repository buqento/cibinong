<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Wbp */

$this->title = 'Update Wbp: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Wbps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->wbpid]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wbp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
