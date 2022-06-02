<?php

namespace app\models;

use yii\db\ActiveRecord;

class Tour extends ActiveRecord {
	public static function tableName() {
		return 'tour';
	}
}

?>