<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Wbp */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Wbps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wbp-view">

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->wbpid], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->wbpid], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'wbpid',
            'name',
            'foto',
            'blok_id',
            'sel_id',
        ],
    ]) ?>

</div>
