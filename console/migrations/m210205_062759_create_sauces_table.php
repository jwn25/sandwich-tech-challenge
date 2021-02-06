<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%sauces}}`.
 */
class m210205_062759_create_sauces_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%sauces}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sauces}}');
    }
}
