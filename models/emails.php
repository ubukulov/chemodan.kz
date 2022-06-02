<?php

namespace app\models;

use yii\db\ActiveRecord;

class emails extends ActiveRecord {
	public static function tableName() {
		return 'emails';
	}
}

?>