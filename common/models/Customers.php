<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email
 * @property string $contact_number
 * @property string $token
 * @property string|null $created_at
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'contact_number', 'token'], 'required'],
            [['created_at'], 'safe'],
            [['full_name', 'email'], 'string', 'max' => 100],
            [['contact_number'], 'string', 'max' => 10],
            [['token'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'full_name' => 'Full Name',
            'email' => 'Email',
            'contact_number' => 'Contact Number',
            'token' => 'Token',
            'created_at' => 'Created At',
        ];
    }

    public function saveCustomer()
    {
        $customer = new Customers();
        $customer->full_name = $this->full_name;
        $customer->email = $this->email;
        $customer->contact_number = $this->contact_number;
        $customer->token = substr(sha1(mt_rand(1, 90000) . 'SALT'), 0, 10);
        return $customer->save(false);
    }

    public function checkToken($token)
    {
        $user = $this->findOne(['token' => $token]);
        return $user ? true : false;
    }
}
