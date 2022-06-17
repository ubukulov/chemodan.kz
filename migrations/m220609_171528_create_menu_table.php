<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m220609_171528_create_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255)->null(),
            'parent_id' => $this->integer(5)->defaultValue(0),
            'active' => $this->tinyInteger(2)->defaultValue(1),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('menu');
    }
}
