<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tastes}}`.
 */
class m210205_062814_create_tastes_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tastes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tastes}}');
    }
}
