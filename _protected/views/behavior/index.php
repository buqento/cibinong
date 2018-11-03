<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BehaviorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Behavior';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="behavior-index">

    <p>
        <?= Html::a('Tambah Behavior', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama',
            'behavior_id',
            'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
