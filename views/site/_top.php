<?php
use yii\grid\GridView;
?>
<h2>Top 10 Kegiatan</h2>
<br>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary' => false,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'nama',
        'peserta',
    ],
]); ?>