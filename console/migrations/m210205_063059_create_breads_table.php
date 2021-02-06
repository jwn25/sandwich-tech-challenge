<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%breads}}`.
 */
class m210205_063059_create_breads_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%breads}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%breads}}');
    }
}
