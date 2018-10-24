<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "absensi".
 *
 * @property int $id
 * @property int $wbp_id
 * @property string $nama
 * @property string $status
 * @property string $snapshot
 * @property string $alasan
 * @property string $kamera
 * @property string $lokasi
 * @property int $kegiatan_id
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
            [['wbp_id', 'kegiatan_id'], 'default', 'value' => null],
            [['wbp_id', 'kegiatan_id'], 'integer'],
            [['nama', 'status', 'snapshot', 'alasan', 'kamera', 'lokasi'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wbp_id' => 'ID WBP',
            'nama' => 'Nama WBP',
            'status' => 'Status',
            'snapshot' => 'Snapshot',
            'alasan' => 'Alasan',
            'kamera' => 'Kamera',
            'lokasi' => 'Lokasi',
            'kegiatan_id' => 'Kegiatan',
        ];
    }
}
