<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Behavior */

$this->title = 'Tambah Behavior';
$this->params['breadcrumbs'][] = ['label' => 'Behavior', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="behavior-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
