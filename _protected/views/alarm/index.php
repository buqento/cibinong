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
        'waktu',
        [
            'attribute' => 'kegiatan_id',
            'value' => function($data) {
                return $data->kegiatan->nama;
            }
        ],
        [
            'attribute' => 'Kamera',
            'value' => function($data) {
                $arr = json_decode($data->kegiatan->kamera);
                $kamera = implode(", ",$arr);
                return $kamera;
                // return $data->kegiatan->kamera;
            }
        ],
        'wbp_id',
        // 'nama_wbp',
        'snapshot',

        // ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\ActionColumn',
                'template' => '{disable}',
                'contentOptions' => ['style' => 'width:50px; white-space: normal;'],
                'buttons' => [
                    'disable' => function ($url, $model) {
                        // <span class="glyphicon glyphicon-info-sign"></span>
                        // material design <i class="material-icons">notification_important</i>
                        return Html::a('<i class="fa fa-bell-slash"></i>', $url, ['class'=>'buqento'], ['title' => Yii::t('app', 'Matikan Alarm')]);
                    },

                ],

                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'disable') {
                        $url = [
                            'alarm/disable/', 
                            'id' => $key,
                        ];
                        return $url;
                    }

                }
            ]
    ],
]); ?>