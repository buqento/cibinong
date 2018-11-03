<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Blok */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Blok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blok-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
        ],
    ]) ?>

</div>
