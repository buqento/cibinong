<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sel */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Sel', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sel-view">
    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'name',
            'blok_id',
        ],
    ]) ?>

</div>
