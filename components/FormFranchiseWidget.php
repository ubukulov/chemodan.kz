<?php
namespace app\components;

use yii\base\Widget;

class FormFranchiseWidget extends Widget {
	public $title = 'УЗНАЙТЕ СТОИМОСТЬ ПУТЕШЕСТВИЯ ВАШЕЙ МЕЧТЫ';
	public $city = 'ГОРОД ВЫЛЕТА:';
	public $id = 'chm_btn';
	public function run() {
		return '<div class="a-186"><div class="a-187">'.$this->title.'</div>
		<div class="a-188">
			<div>
				<div class="a-189">КАК ВАС ЗОВУТ:</div>
				<div class="a-190"><input type="text" class="a-192" placeholder="Рустам Дмитриев"></div>
			</div>
			<div>
				<div class="a-189">ВАШ НОМЕР ТЕЛЕФОНА:</div>
				<div class="a-190"><input type="text" class="a-192" placeholder="+77774442211"></div>
			</div>
			<div>
				<button class="a-191" id="'.$this->id.'" onclick="return page.readyTourGetForFranchise(this);">Отправить</button>
			</div>
			<div style="display: none;">
				<div class="a-189">'.$this->city.'</div>
				<div class="a-190"><input type="text" class="a-192" placeholder="Алматы"></div>
			</div>
			
		</div>
		</div>';
	}

}
?>