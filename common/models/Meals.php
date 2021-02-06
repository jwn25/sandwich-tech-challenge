<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meals".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $status
 * @property string|null $description
 * @property string|null $created_at
 */
class Meals extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meals';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['created_at'], 'safe'],
            [['name', 'description'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'description' => 'Description',
            'created_at' => 'Created At',
        ];
    }

    public function getMealById($id)
    {
        $meal = $this->findOne(['id' => $id]);
        return $meal;
    }
}
