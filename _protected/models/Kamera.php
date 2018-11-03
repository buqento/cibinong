<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kamera".
 *
 * @property int $id
 * @property string $kamera_id
 * @property string $nama
 * @property string $lokasi
 * @property string $created_at
 */
class Kamera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kamera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['created_at'], 'safe'],
            [['kamera_id'], 'string', 'max' => 64],
            [['nama'], 'string', 'max' => 100],
            [['lokasi'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kamera_id' => 'Kamera ID',
            'nama' => 'Nama',
            'lokasi' => 'Lokasi',
            'created_at' => 'Created At',
        ];
    }
}
