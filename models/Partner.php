<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "partners".
 *
 * @property int $id
 * @property string $image
 * @property int $publish
 */
class Partner extends \yii\db\ActiveRecord
{
    public $image_path;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'partners';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['publish'], 'integer'],
            [['image'], 'string', 'max' => 255],
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
            'image' => Yii::t('partners', 'Image'),
            'publish' => Yii::t('partners', 'Publish'),
        ];
    }

    public function getImage()
    {
        return '/uploads/partners/' . $this->image;
    }
}
