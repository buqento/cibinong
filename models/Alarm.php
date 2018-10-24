<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alarm".
 *
 * @property int $id
 * @property int $kegiatan_id
 * @property string $waktu
 * @property string $kamera
 * @property int $wbp_id
 * @property string $nama_wbp
 * @property string $snapshot
 */
class Alarm extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alarm';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kegiatan_id', 'wbp_id'], 'default', 'value' => null],
            [['kegiatan_id', 'wbp_id'], 'integer'],
            [['waktu', 'kamera', 'nama_wbp', 'snapshot'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kegiatan_id' => 'Kegiatan',
            'waktu' => 'Waktu',
            'kamera' => 'Kamera',
            'wbp_id' => 'ID WBP',
            'nama_wbp' => 'Nama WBP',
            'snapshot' => 'Snapshot',
        ];
    }

    public function getKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id' => 'kegiatan_id']);
    }
}
