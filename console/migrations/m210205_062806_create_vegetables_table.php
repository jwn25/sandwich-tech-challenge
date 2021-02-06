<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vegetables}}`.
 */
class m210205_062806_create_vegetables_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vegetables}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vegetables}}');
    }
}
