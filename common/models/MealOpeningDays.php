<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "meal_opening_days".
 *
 * @property int $id
 * @property string|null $day
 * @property string|null $start
 * @property string|null $end
 * @property int|null $meal_id
 */
class MealOpeningDays extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'meal_opening_days';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['start', 'end'], 'safe'],
            [['meal_id'], 'integer'],
            [['meal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Meals::className(), 'targetAttribute' => ['meal_id' => 'id']],
            [['day'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'day' => 'Day',
            'start' => 'Start',
            'end' => 'End',
            'meal_id' => 'Meal ID',
        ];
    }

    public function checkOpenStatus($id)
    {
        $time =  date('H:i');
        $day =  strtolower(date('l'));
        $openingTime = $this->findOne(['meal_id' => $id, 'day' => $day]);
        if ($openingTime) {
            $startTime  = date('H:i', strtotime($openingTime->start));
            $endTime  = date('H:i', strtotime($openingTime->end));
            if ($time > $startTime && $time < $endTime) {
                return true;
            }
        }
        return false;
    }

    public function getMeal()
    {
        return $this->hasOne(Meals::className(), ['id' => 'meal_id']);
    }
}
