<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BlokSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blok';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blok-index">
    <p>
        <?= Html::a('Create Blok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
