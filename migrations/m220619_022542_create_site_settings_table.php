<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%site_settings}}`.
 */
class m220619_022542_create_site_settings_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('site_settings', [
            'id' => $this->primaryKey(),
            'phone1' => $this->string(),
            'phone2' => $this->string(),
            'info' => $this->text(),
            'whatsapp' => $this->string(),
            'instagram' => $this->string(),
            'telegram' => $this->string(),
            'address1' => $this->string(),
            'address1_url' => $this->string(),
            'address2' => $this->string(),
            'address2_url' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('site_settings');
    }
}
