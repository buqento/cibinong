<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Alarm';
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    // 'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        // 'id',
        'kegiatan_id',
        'waktu',
        'kamera',
        'wbp_id',
        'nama_wbp',
        'snapshot',

        // ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{disable}',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
                'buttons' => [
                    'disable' => function ($url, $model) {
                        // <span class="glyphicon glyphicon-info-sign"></span>
                        return Html::a('<i class="material-icons">alarm_off</i>', $url, ['class'=>'buqento'], ['title' => Yii::t('app', 'Matikan Alarm')]);
                    },

                ],

                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'disable') {
                        $url = [
                            'alarm/view/', 
                            'id' => $key,
                        ];
                        return $url;
                    }

                }
            ]
    ],
]); ?>