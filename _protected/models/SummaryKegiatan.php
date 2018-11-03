<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "summary_kegiatan".
 *
 * @property int $id
 * @property string $nama
 * @property string $waktu_mulai
 * @property string $waktu_selesai
 * @property string $kamera
 * @property string $behavior
 * @property string $lokasi
 * @property string $peserta
 * @property string $created_at
 */
class SummaryKegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'summary_kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'default', 'value' => null],
            [['id'], 'integer'],
            [['created_at'], 'safe'],
            [['nama', 'waktu_mulai', 'waktu_selesai', 'kamera', 'behavior', 'lokasi', 'peserta'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'waktu_mulai' => 'Waktu Mulai',
            'waktu_selesai' => 'Waktu Selesai',
            'kamera' => 'Kamera',
            'behavior' => 'Behavior',
            'lokasi' => 'Lokasi',
            'peserta' => 'Peserta',
            'created_at' => 'Created At',
        ];
    }
}
