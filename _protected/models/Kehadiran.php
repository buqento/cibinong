<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kehadiran".
 *
 * @property int $id
 * @property string $judul
 * @property int $upacara
 * @property int $apel_pagi
 * @property int $shalat
 */
class Kehadiran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kehadiran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['upacara', 'apel_pagi', 'shalat'], 'default', 'value' => null],
            [['upacara', 'apel_pagi', 'shalat'], 'integer'],
            [['judul'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul' => 'Judul',
            'upacara' => 'Upacara',
            'apel_pagi' => 'Apel Pagi',
            'shalat' => 'Shalat',
        ];
    }
}
