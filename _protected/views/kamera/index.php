<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Kamera';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
    <?= Html::a('Tambah Kamera', ['create'], ['class' => 'btn btn-success']) ?>
</p>
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
