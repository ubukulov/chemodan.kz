<?php

namespace app\models;

use yii\db\ActiveRecord;

class Payments extends ActiveRecord {
	public static function tableName() {
		return 'payments';
	}
}

?>