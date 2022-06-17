<?php

use yii\db\Migration;

/**
 * Class m220613_063943_add_alias_content_to_menu_table
 */
class m220613_063943_add_alias_content_to_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'alias', $this->string());
        $this->addColumn('menu', 'content', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('menu', 'alias');
        $this->dropColumn('menu', 'content');
    }
}
