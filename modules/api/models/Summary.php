<?php

namespace app\modules\api\models;

use Yii;

class Summary extends \yii\db\ActiveRecord
{

    const SCENARIO_CREATE = 'create';

    public static function tableName()
    {
        return 'summary';
    }

    public function rules()
    {
        return [
            [['total', 'name'], 'required'],
            [['total'], 'default', 'value' => null],
            [['total'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['name', 'total'];
        return $scenarios;
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'total' => 'Total',
        ];
    }
}
