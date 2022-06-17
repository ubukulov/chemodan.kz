<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%menu}}`.
 */
class m220615_055800_add_columns_to_menu_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('menu', 'seo_title', $this->string());
        $this->addColumn('menu', 'widget_title', $this->string());
        $this->addColumn('menu', 'keywords', $this->string());
        $this->addColumn('menu', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('menu', 'seo_title');
        $this->dropColumn('menu', 'widget_title');
        $this->dropColumn('menu', 'keywords');
        $this->dropColumn('menu', 'description');
    }
}
