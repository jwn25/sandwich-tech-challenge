<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $meal_id
 * @property int|null $bread_id
 * @property string|null $bread_size
 * @property string|null $baked
 * @property int|null $taste_id
 * @property string|null $extra_item
 * @property int|null $vegetable_id
 * @property int|null $sauce_id
 * @property string|null $status
 * @property string|null $address
 * @property string|null $created_at
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'meal_id', 'bread_id', 'taste_id', 'vegetable_id', 'sauce_id'], 'integer'],
            [['user_id', 'meal_id', 'bread_id', 'taste_id', 'vegetable_id', 'sauce_id'], 'required'],
            [['created_at'], 'safe'],
            [['bread_size', 'baked', 'extra_item', 'status'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'meal_id' => 'Meal ID',
            'bread_id' => 'Bread ID',
            'bread_size' => 'Bread Size',
            'baked' => 'Baked',
            'taste_id' => 'Taste ID',
            'extra_item' => 'Extras',
            'vegetable_id' => 'Vegetable ID',
            'sauce_id' => 'Sauce ID',
            'status' => 'Status',
            'address' => 'Address',
            'created_at' => 'Created At',
        ];
    }

    public function getOrder($id, $token)
    {
        $customer =  Customers::findOne(['token' => $token]);
        return $this->findOne(['id' => $id, 'user_id' => $customer->id]);
    }


    public function placeOrder($id, $token)
    {
        $customer =  Customers::findOne(['token' => $token]);
        $order = new Orders();
        $order->user_id = $customer->id;
        $order->meal_id = $id;
        $order->bread_id = $this->bread_id;
        $order->bread_size = $this->bread_size;
        $order->baked = $this->baked;
        $order->taste_id = $this->taste_id;
        $order->extra_item = $this->extra_item;
        $order->vegetable_id = $this->vegetable_id;
        $order->sauce_id = $this->sauce_id;
        $order->status = $this->status;
        $order->address = $this->address;
        $order->status = 'open';

        return $order->save(false);
    }


    public function updateOrder($id)
    {
        $order = $this->findOne($id);
        $order->bread_id = $this->bread_id;
        $order->bread_size = $this->bread_size;
        $order->baked = $this->baked;
        $order->taste_id = $this->taste_id;
        $order->extra_item = $this->extra_item;
        $order->vegetable_id = $this->vegetable_id;
        $order->sauce_id = $this->sauce_id;
        $order->status = $this->status;
        $order->address = $this->address;
        $order->status = 'open';

        if ($this->status)
            $order->status = $this->status;
        return $order->save(false);
    }

    public function getLastOrder($user_token)
    {
        $customer =  Customers::findOne(['token' => $user_token]);
        return $this->findOne(['user_id' => $customer->id]);
    }

    public function customerOrderHistory($user_token)
    {
        $customer =  Customers::findOne(['token' => $user_token]);
        return $this->find()->where(['user_id' => $customer->id])->all();
    }

    //RELATIONS
    public function getBread()
    {

        return $this->hasOne(Breads::className(), ['id' => 'bread_id']);
    }

    public function getMeal()
    {

        return $this->hasOne(Meals::className(), ['id' => 'meal_id']);
    }

    public function getTaste()
    {

        return $this->hasOne(Tastes::className(), ['id' => 'taste_id']);
    }

    public function getVegetable()
    {

        return $this->hasOne(Vegetables::className(), ['id' => 'vegetable_id']);
    }
    public function getSauce()
    {
        return $this->hasOne(Sauces::className(), ['id' => 'sauce_id']);
    }

    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['id' => 'user_id']);
    }
}
