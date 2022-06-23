<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "site_settings".
 *
 * @property int $id
 * @property string $phone1
 * @property string $phone2
 * @property string $info
 * @property string $whatsapp
 * @property string $instagram
 * @property string $telegram
 * @property string $address1
 * @property string $address1_url
 * @property string $address2
 * @property string $address2_url
 */
class SiteSettings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'site_settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['info'], 'string'],
            [['phone1', 'phone2', 'whatsapp', 'instagram', 'telegram', 'address1', 'address1_url', 'address2', 'address2_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone1' => Yii::t('ssettings', 'Phone 1'),
            'phone2' => Yii::t('ssettings', 'Phone 2'),
            'info' => Yii::t('ssettings', 'Info'),
            'whatsapp' => Yii::t('ssettings', 'Whatsapp'),
            'instagram' => Yii::t('ssettings', 'Instagram'),
            'telegram' => Yii::t('ssettings', 'Telegram'),
            'address1' => Yii::t('ssettings', 'Address 1'),
            'address1_url' => Yii::t('ssettings', 'Address 1 Url'),
            'address2' => Yii::t('ssettings', 'Address 2'),
            'address2_url' => Yii::t('ssettings', 'Address 2 Url'),
        ];
    }
}
