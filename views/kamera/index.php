<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Kamera';
?>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        'kamera_id',
        'nama',
        'created_at',

        [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:105px; white-space: normal;']
        ],
        
    ],
]); ?>
