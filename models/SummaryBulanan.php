<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "summary_bulanan".
 *
 * @property int $id
 * @property string $bulan
 * @property int $upacara
 * @property int $apel_pagi
 * @property int $shalat
 */
class SummaryBulanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'summary_bulanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['upacara', 'apel_pagi', 'shalat'], 'default', 'value' => null],
            [['upacara', 'apel_pagi', 'shalat'], 'integer'],
            [['bulan'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bulan' => 'Bulan',
            'upacara' => 'Upacara',
            'apel_pagi' => 'Apel Pagi',
            'shalat' => 'Shalat',
        ];
    }
}
