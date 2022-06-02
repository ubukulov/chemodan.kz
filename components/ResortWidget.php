<?php
namespace app\components;

use yii\base\Widget;
use app\models\internal_toursim;

class ResortWidget extends Widget {

	public $id = 0;
	public function run() {

		$SQL = internal_toursim::find()->where(['id' => $this->id])->asArray()->all();
		
		if (sizeof($SQL) > 0) {
			$arr = $SQL[0];
			return json_encode(['title'=>$arr['title'], 'body'=>$arr['body'], 'img'=>json_decode($arr['img'])]);
		}
		return json_encode(['title'=>'информация не найдена','body'=>'<div class="a-0-1">Страница не найдена</div>','img'=>'']);
		
	}
}
?>