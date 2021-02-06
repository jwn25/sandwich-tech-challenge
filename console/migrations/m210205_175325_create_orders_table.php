<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%orders}}`.
 */
class m210205_175325_create_orders_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orders}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'meal_id' => $this->integer(),
            'bread_id' => $this->integer(),
            'bread_size'=> $this->string(),
            'baked' => $this->string(),
            'taste_id' => $this->integer(),
            'extra_item' => $this->string(),
            'vegetable_id' => $this->integer(),
            'sauce_id' => $this->integer(),
            'status' => $this->string(),
            'address' => $this->string(500),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orders}}');
    }
}
