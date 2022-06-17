<?php

use yii\db\Migration;

/**
 * Class m220615_074748_add_publish_to_menu_table
 */
class m220615_074748_add_publish_to_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'publish', $this->tinyInteger(2)->defaultValue(1));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('menu', 'publish');
    }
}
