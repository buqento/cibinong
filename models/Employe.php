<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employe".
 *
 * @property int $id
 * @property int $tenant_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $position
 * @property string $created_at
 */
class Employe extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'employe';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tenant_id'], 'default', 'value' => null],
            [['tenant_id'], 'integer'],
            [['created_at'], 'safe'],
            [['name', 'email', 'position'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 16],
            ['email', 'email']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tenant_id' => 'Tenant ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'position' => 'Position',
            'created_at' => 'Created At',
        ];
    }
}
