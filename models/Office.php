<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "offices".
 *
 * @property int $id
 * @property int $city_id
 * @property string $title
 * @property string $address
 * @property string $phones
 * @property int $publish
 * @property string $image
 * @property string $map_url
 *
 * @property City $city
 */
class Office extends \yii\db\ActiveRecord
{
    public $image_path;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'offices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['city_id'], 'required'],
            [['city_id'], 'integer'],
            [['publish'], 'integer'],
            [['image'], 'string'],
            [['map_url'], 'string'],
            [['title', 'address', 'phones'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
            [['image_path'], 'safe'],
            [['image_path'], 'file', 'extensions'=>'jpg, gif, png'],
            [['image_path'], 'file', 'maxSize'=>'100000'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_id' => Yii::t('offices', 'City ID'),
            'title' => Yii::t('offices', 'Title'),
            'address' => Yii::t('offices', 'Address'),
            'phones' => Yii::t('offices', 'Phones'),
            'publish' => Yii::t('offices', 'Publish'),
            'image' => Yii::t('offices', 'Image'),
            'map_url' => Yii::t('offices', 'Map Url'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    public function getImage()
    {
        return '/uploads/offices/' . $this->image;
    }
}
