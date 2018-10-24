<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tenant".
 *
 * @property int $id
 * @property string $company_name
 * @property string $open_hour
 * @property string $close_hour
 * @property int $build_id
 * @property int $floor_id
 * @property string $phone
 * @property string $email
 * @property string $profile
 * @property string $picture
 * @property string $address
 * @property string $created_at
 */
class Tenant extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tenant';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['open_hour', 'close_hour', 'created_at'], 'safe'],
            [['build_id', 'floor_id'], 'default', 'value' => null],
            [['build_id', 'floor_id'], 'integer'],
            [['picture'], 'string'],
            [['company_name'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 16],
            [['email', 'address'], 'string', 'max' => 50],
            [['profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'company_name' => 'Company Name',
            'open_hour' => 'Open Hour',
            'close_hour' => 'Close Hour',
            'build_id' => 'Build ID',
            'floor_id' => 'Floor ID',
            'phone' => 'Phone',
            'email' => 'Email',
            'profile' => 'Profile',
            'picture' => 'Picture',
            'address' => 'Address',
            'created_at' => 'Created At',
        ];
    }
}
