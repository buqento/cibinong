<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kegiatan".
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
class Kegiatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kegiatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['nama', 'required', 'message' => 'Nama tidak boleh kosong'],
            ['waktu_mulai', 'required', 'message' => 'Waktu mulai tidak boleh kosong'],
            ['waktu_selesai', 'required', 'message' => 'Waktu selesai tidak boleh kosong'],
            ['kamera', 'required', 'message' => 'Kamera tidak boleh kosong'],
            ['behavior', 'required', 'message' => 'Behavior tidak boleh kosong'],
            ['lokasi', 'required', 'message' => 'Lokasi tidak boleh kosong'],
            ['blok_id', 'required', 'message' => 'Peserta tidak boleh kosong'],
            ['sel_id', 'required', 'message' => 'Peserta tidak boleh kosong'],
            ['peserta', 'required', 'message' => 'Peserta tidak boleh kosong'],
            [['created_at'], 'safe'],
            [['nama', 'waktu_mulai', 'waktu_selesai', 'lokasi'], 'string', 'max' => 255],
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
            'blok_id' => 'Blok',
            'sel_id' => 'Sel',
            'peserta' => 'Peserta',
            'created_at' => 'Created At',
        ];
    }

    public function beforeSave($insert) {
        if (parent::beforeSave($insert)) {
            $this->kamera = json_encode($this->kamera);
            $this->behavior = json_encode($this->behavior);
            $this->peserta = json_encode($this->peserta);

            return true;
        } else {
            return false;
        }
    }


}
