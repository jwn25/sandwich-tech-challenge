<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%meals}}`.
 */
class m210204_171455_create_meals_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%meals}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'status' => $this->string(),
            'description' => $this->string(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%meals}}');
    }
}
