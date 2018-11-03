<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\helpers\Url;

$this->title = 'Kegiatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<p>
<?= Html::button('Tambah', ['value' => Url::to(['create']), 'class' => 'btn btn-success', 'id' => 'modalButton']) ?>
<?php // Html::a('Tambah', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?php
Modal::begin([
    'header' => '<h4>Tambah Kegiatan</h4>',
    'id' => 'modal',
    'size' => 'modal-lg',
]);
echo "<div id='modalContent'></div>";
Modal::end();
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        'nama',
        'waktu_mulai',
        'waktu_selesai',
        'kamera',
        'behavior',
        'lokasi',
        'peserta',
        //'created_at',

        [
            'class' => 'yii\grid\ActionColumn',
            'contentOptions' => ['style' => 'width:105px; white-space: normal;']
        ],
    ],
]); ?>
