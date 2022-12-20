<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $tm
 * @property int $ss
 * @property string $img
 */

class Comments extends ActiveRecord {

    /**
     * {@inheritdoc}
     */
	public static function tableName()
    {
		return 'comments';
	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 255],
            [['comment'], 'string'],
            [['tm'], 'string'],
            [['ss'], 'integer'],
            [['img'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('reviews', 'Name'),
            'comment' => Yii::t('reviews', 'Comment'),
            'ss' => Yii::t('reviews', 'Ss'),
        ];
    }
}
