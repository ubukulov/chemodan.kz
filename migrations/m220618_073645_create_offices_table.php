<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%offices}}`.
 */
class m220618_073645_create_offices_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('offices', [
            'id' => $this->primaryKey(),
            'city_id' => $this->integer()->notNull(),
            'title' => $this->string(),
            'address' => $this->string(),
            'phones' => $this->string(),
            'publish' => $this->tinyInteger()->defaultValue(1),
            'image' => $this->string(),
            'map_url' => $this->string(),
        ]);

        $this->addForeignKey('fk_cities_id', 'offices', 'city_id', 'cities', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('offices');
    }
}
