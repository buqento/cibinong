<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wbp".
 *
 * @property int $id
 * @property string $wbpid
 * @property string $nama
 * @property string $foto
 * @property int $blok_id
 * @property int $sel_id
 */
class Wbp extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wbp';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['wbpid', 'name', 'foto', 'blok_id'], 'required'],
            [['wbpid', 'blok_id', 'sel_id'], 'default', 'value' => null],
            [['wbpid', 'blok_id', 'sel_id'], 'integer'],
            [['name', 'foto'], 'string', 'max' => 255],
            [['wbpid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'wbpid' => 'Wbpid',
            'name' => 'Nama',
            'foto' => 'Foto',
            'blok_id' => 'Blok ID',
            'sel_id' => 'Sel ID',
        ];
    }

    public static function getPesertaList($blok_id, $sel_id)
    {
        $pesertas = self::find()
            ->select(['id', 'name'])
            ->where(['blok_id' => $blok_id, 'sel_id' => $sel_id])
            ->asArray()
            ->all();
        return $pesertas;
    }
}
