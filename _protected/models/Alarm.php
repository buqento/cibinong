<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "alarm".
 *
 * @property int $id
 * @property int $kegiatan_id
 * @property string $waktu
 * @property int $kamera_id
 * @property int $wbp_id
 * @property string $nama_wbp
 * @property string $snapshot
 * @property int $status
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
            [['kegiatan_id', 'waktu', 'kamera_id', 'wbp_id', 'nama_wbp', 'snapshot', 'status'], 'required'],
            [['kegiatan_id', 'kamera_id', 'wbp_id', 'status'], 'default', 'value' => null],
            [['kegiatan_id', 'kamera_id', 'wbp_id', 'status'], 'integer'],
            [['waktu', 'nama_wbp', 'snapshot'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kegiatan_id' => 'Kegiatan ID',
            'waktu' => 'Waktu',
            'kamera_id' => 'Kamera ID',
            'wbp_id' => 'Wbp ID',
            'nama_wbp' => 'Nama Wbp',
            'snapshot' => 'Snapshot',
            'status' => 'Status',
        ];
    }

    public function getKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id' => 'kegiatan_id']);
    }

    public function getKamera()
    {
        return $this->hasOne(Kamera::className(), ['id' => 'kamera_id']);
    }
}
