<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "behavior".
 *
 * @property int $id
 * @property string $nama
 * @property string $created_at
 * @property string $behavior_id
 */
class Behavior extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'behavior';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'behavior_id'], 'required'],
            [['created_at'], 'safe'],
            [['nama'], 'string', 'max' => 100],
            [['behavior_id'], 'string', 'max' => 64],
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
            'created_at' => 'Created At',
            'behavior_id' => 'Behavior ID',
        ];
    }
}
