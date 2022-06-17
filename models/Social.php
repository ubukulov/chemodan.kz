<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "social".
 *
 * @property int $id
 * @property string $icon
 * @property string $url
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ContactSocial[] $contactSocial
 * @property Contact[] $contacts
 *
 * @package app\models
 */
class Social extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'social';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                [
                    'icon',
                    'url',
                    'contacts',
                ],
                'required'
            ],
            [
                [
                    'icon'
                ],
                'string',
                'max' => 128
            ],
            [
                [
                    'url'
                ],
                'string',
                'max' => 255
            ],
            [
                'icon',
                'unique',
                'skipOnError'     => true,
                'targetClass'     => static::class,
                'filter' => $this->getScenario() == self::SCENARIO_UPDATE ? 'id != '.$this->id : ''
            ],
            [
                [
                    'created_at',
                    'updated_at'
                ],
                'safe'
            ],
        ];
    }

    /**
     * List if attributes.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'id',
            'icon',
            'url',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'icon' => Yii::t('app', 'Icon html class'),
            'url' => Yii::t('social', 'Url'),
            'contacts' => Yii::t('contacts', 'Contacts'),
            'created_at' => Yii::t('app', 'Created date'),
            'updated_at' => Yii::t('app', 'Updated date'),
        ];
    }

    /**
     * @return array
     */
    public function scenarios()
    {
        $scenarios = parent::scenarios();

        $scenarios[self::SCENARIO_CREATE][] = 'contacts';
        $scenarios[self::SCENARIO_UPDATE][] = 'contacts';

        return $scenarios;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContactSocial()
    {
        return $this->hasMany(ContactSocial::class, [
            'social_id' => 'id'
        ]);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContacts()
    {
        return $this->hasMany(Contact::class, [
            'id' => 'contacts_id'
        ])->viaTable('contacts_social', [
            'social_id' => 'id'
        ]);
    }

    /**
     * @param $contacts
     *
     * @return void
     */
    public function setContacts($contacts): void
    {
        $this->contacts = $contacts;
    }

    /**
     * Link with contacts entity after save.
     *
     * @param bool $insert
     *
     * @param array $changedAttributes
     */
    public function afterSave($insert, $changedAttributes)
    {
        $this->linkWithContacts(empty($this->contacts) ? [] : $this->contacts);

        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * Link with contacts entity.
     *
     * @param array $contactList
     */
    private function linkWithContacts(array $contactList): void
    {
        ContactSocial::deleteAll([
            'social_id' => $this->id
        ]);

        foreach ($contactList as $contactId) {
            $contactSocial = new ContactSocial();
            $contactSocial->social_id = $this->id;
            $contactSocial->contacts_id = $contactId;
            $contactSocial->save();
        }
    }
}
