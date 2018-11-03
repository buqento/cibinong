<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sel".
 *
 * @property int $id
 * @property string $name
 * @property int $blok_id
 */
class Sel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'blok_id'], 'required'],
            [['blok_id'], 'default', 'value' => null],
            [['blok_id'], 'integer'],
            [['name'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'blok_id' => 'Blok ID',
        ];
    }

    public static function getSelList($blok_id)
    {
        $sels = self::find()
            ->select(['id', 'name'])
            ->where(['blok_id' => $blok_id])
            ->asArray()
            ->all();
        return $sels;
    }
}
