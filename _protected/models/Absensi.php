<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absensi".
 *
 * @property int $id
 * @property int $wbp_wbpid
 * @property string $status
 * @property string $snapshot
 * @property string $alasan
 * @property string $kamera
 * @property string $lokasi
 * @property int $kegiatan_id
 * @property string $tanggal
 */
class Absensi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'absensi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // [['wbp_wbpid', 'kegiatan_id'], 'default', 'value' => null],
            // [['wbp_wbpid', 'kegiatan_id'], 'integer'],
            // [['tanggal'], 'safe'],
            [['status', 'snapshot', 'alasan', 'kamera', 'lokasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wbp_wbpid' => 'Wbp Wbpid',
            'status' => 'Status',
            'snapshot' => 'Snapshot',
            'alasan' => 'Alasan',
            'kamera' => 'Kamera',
            'lokasi' => 'Lokasi',
            'kegiatan_id' => 'Kegiatan ID',
            'tanggal' => 'Tanggal',
        ];
    }

    public function getKegiatan()
    {
        return $this->hasOne(Kegiatan::className(), ['id' => 'kegiatan_id']);
    }
}
