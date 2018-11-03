<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\WbpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wbps';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wbp-index">
    
    <p>
        <?= Html::a('Create Wbp', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'wbpid',
            'name',
            // 'foto',
            'blok_id',
            'sel_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
