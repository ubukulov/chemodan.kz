<?php
namespace app\components;

use yii\base\Widget;
use app\models\Comments;

class CommentWidget extends Widget {
	public function run() {

		$SQL = Comments::find()->asArray()->limit(5)->all();

		

		$out = ['',''];

		foreach ($SQL as $key => $value) {
			$comment = $this->cutComment($value['comment']);
			$img = json_decode($value['img'],true);
			$a = '<div class="a-48"><div class="a-49a"><div class="a-49" style="background-image: url('.$img[0].');"></div></div><div class="a-50"><div class="a-51"><div class="a-52">'.$value['name'].'</div></div><div class="a-54">'.$comment.'</div><div class="a-263" onclick="return page.readFull(this);" data-text="'.htmlspecialchars($value['comment']).'">Читать полностью</div></div></div>';
			$out[0] .= $a;
			$out[1] .= $a;
		}
		return json_encode($out);
	}

	public function cutComment($a) {
		$a = strip_tags($a);
		$a = substr($a, 0, 210);
		$a = rtrim($a, "!,.-");
		$a = substr($a, 0, strrpos($a, ' '));
		return $a.'...';
	}
	
}
?>