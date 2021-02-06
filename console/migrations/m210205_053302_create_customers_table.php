<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%customers}}`.
 */
class m210205_053302_create_customers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%customers}}', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(100)->notNull(),
            'email' => $this->string(100)->notNull(),
            'contact_number' => $this->string(10)->notNull(),
            'token' => $this->string()->notNull(),
            'created_at' => $this->timestamp()->defaultValue(date('Y-m-d H:i:s'))
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%customers}}');
    }
}
