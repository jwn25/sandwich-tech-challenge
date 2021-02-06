<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meal_opening_days}}`.
 */
class m210205_084532_create_meal_opening_days_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meal_opening_days}}', [
            'id' => $this->primaryKey(),
            'day' => $this->string(),
            'start' => $this->time(),
            'end' => $this->time(),
            'meal_id' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meal_opening_days}}');
    }
}
