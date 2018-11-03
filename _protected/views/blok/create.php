<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Blok */

$this->title = 'Create Blok';
$this->params['breadcrumbs'][] = ['label' => 'Bloks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blok-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
