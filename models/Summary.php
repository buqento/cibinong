<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "summary".
 *
 * @property int $id
 * @property string $name
 * @property string $total
 */
class Summary extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'summary';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['total'], 'default', 'value' => null],
            [['total'], 'integer'],
            [['name'], 'string', 'max' => 255],
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
            'total' => 'Total',
        ];
    }
}
