<?php
namespace app\components;

use yii\base\Widget;

class LeadWidget extends Widget {
	public $title = 'УЗНАЙТЕ СТОИМОСТЬ ПУТЕШЕСТВИЯ ВАШЕЙ МЕЧТЫ';
	public $city = 'ГОРОД ВЫЛЕТА:';
	public $id = 'chm_btn2';
	public function run() {
		return '<div class="a-186" id="question" style="padding: 20px; height: auto;"><div class="a-187" style="position: inherit;">'.$this->title.'</div>
		<div class="a-188" style="position: inherit; height: auto; margin: 0; margin-left: auto; margin-right: auto;">
			<div class="text-center">
				<div class="a-189">КАК ВАС ЗОВУТ:</div>
				<div class="a-190"><input type="text" id="first_name1" style="max-width: 100%;" class="a-192" placeholder="Рустам Дмитриев"></div>
			</div>
			<div class="text-center">
				<div class="a-189">ВАШ НОМЕР ТЕЛЕФОНА:</div>
				<div class="a-190"><input type="text" id="phone_numberfr1" style="max-width: 100%;" class="a-192" placeholder="+77774442211"></div>
			</div>
			<div class="text-center">
				<div class="a-189">ВАШ EMAIL:</div>
				<div class="a-190"><input type="email" id="email1" style="max-width: 100%;" class="a-192" placeholder="Ваш email"></div>
			</div>
			<div style="display: none;">
				<div class="a-189">'.$this->city.'</div>
				<div class="a-190"><input type="text" class="a-192" placeholder="Алматы"></div>
			</div>
			
		</div>
		<div style="width: 400px;margin: 0px auto; max-width: 100%;">
				<button id="'.$this->id.'" style="width: 400px;margin-top: 20px;background: orange;border: 1px solid orange;color: black;font-weight: bold; max-width: 100%;" class="a-191" onclick="return page.readyTourGetOne(this);">Отправить</button>
			</div>
		</div>';
	}

}


?>