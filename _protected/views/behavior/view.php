<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Behavior */

$this->title = 'Behavior';
$this->params['breadcrumbs'][] = ['label' => 'Behavior', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="behavior-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'id',
            'nama',
            'behavior_id',
            'created_at',
        ],
    ]) ?>

</div>
