<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sel';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sel-index">

    <p>
        <?= Html::a('Create Sel', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'name',
            'blok_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
