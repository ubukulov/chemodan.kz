<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $title
 * @property string $alias
 * @property int $parent_id
 * @property int $active
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id', 'active'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 255],
            [['content'], 'string'],
            [['widget_title'], 'string'],
            [['seo_title'], 'string'],
            [['keywords'], 'string'],
            [['description'], 'string'],
            [['publish'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => Yii::t('menu', 'Title'),
            'alias' => Yii::t('menu', 'Alias'),
            'parent_id' => Yii::t('menu', 'Parent ID'),
            'active' => Yii::t('menu', 'Active'),
            'content' => Yii::t('menu', 'Content'),
            'widget_title' => Yii::t('menu', 'Widget Title'),
            'seo_title' => Yii::t('menu', 'Seo Title'),
            'keywords' => Yii::t('menu', 'Keywords'),
            'description' => Yii::t('menu', 'Description'),
            'created_at' => Yii::t('menu', 'Created At'),
            'updated_at' => Yii::t('menu', 'Updated At'),
            'publish' => Yii::t('menu', 'Publish'),
        ];
    }
}
