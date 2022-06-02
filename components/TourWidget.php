<?php
namespace app\components;

use yii\base\Widget;
use app\models\Btours;

class TourWidget extends Widget {


	public function run() {

		$SQL = Btours::find()->where(['ss' => '0'])->asArray()->all();

		$turkey = $UAI = $THA = $CHN = $IND = $CZ = '';
		$names = ['turkey'=>'Турция','uae'=>'ОАЭ','thailand'=>'Тайланд','china'=>'Китай','india'=>'Индия','chezh'=>'Чехия','dubai'=>'Дубай','tbilisi'=>'Тбилиси','dominicana'=>'Доминикана'];
		$html = '';
		foreach ($SQL as $key => $value) {
			$html .= '<div class="a-17" data-info="" onclick="return page.showFullInfo(this,page.stop(event));" data-id="'.htmlspecialchars(json_encode($value)).'">
					<div class="a-18"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div>';
			/*
			if ($value['to']==='turkey') {
				$turkey = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-tr"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			} else if ($value['to']==='uae') {
				$UAI = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-ae"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			} else if ($value['to']==='thailand') {
				$THA = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-th"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			} else if ($value['to']==='china') {
				$CHN = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-cn"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			} else if ($value['to']==='india') {
				$IND = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-in"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			} else if ($value['to']==='chezh') {
				$CZ = '<a href="/search?id='.$value['id'].'"><div class="a-17" data-info="">
					<div class="a-18 a-18-cz"></div>
					<div class="a-19">
						<div class="a-20">'.$names[$value['to']].' из Алматы</div>
						<div class="a-21">от '.$value['price'].' тг</div>
					</div>
				</div></a>';
			}
			*/
		}

		//$turkey.$UAI.$THA.$CHN.$IND.$CZ

		return '<div class="a-12" style="display: none;">
				<div class="a-13">Город вылета:</div>
				<div class="a-14">
					<div class="a-15 a-15a" onclick="return page.getTourList(this);" data-info="almaty">Алматы</div><div class="a-15" onclick="return page.getTourList(this);" data-info="aktau">Актау</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="aktobe">Актобе</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="astana">Астана</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="atyrau">Атырау</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="karaganda">Караганда</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="shymkent">Шымкент</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="bishkek">Бишкек</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="kishinev">Кишинев</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="dushanbe">Душанбе</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="kiev">Киев</div><div class="a-15 " onclick="return page.getTourList(this);" data-info="odessa">Одесса</div>
				</div>
			</div>
			<div class="a-16">
				'.$html.'
			</div>';

			/*
		Array ( [Актау] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 109 [name] => AKTAU [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => AKTAU [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 109 [name] => AKTAU [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => AKTAU [stateFromNameAlt] => Kazakhstan ) ) ) [Актобе] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 105 [name] => AKTOBE [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => AKTOBE [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 105 [name] => AKTOBE [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => AKTOBE [stateFromNameAlt] => Kazakhstan ) ) ) [Алматы] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 9 [name] => ALMATY [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 1 [nameAlt] => ALMATY [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 9 [name] => ALMATY [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 1 [nameAlt] => ALMATY [stateFromNameAlt] => Kazakhstan ) ) ) [Астана] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 12 [name] => ASTANA [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => ASTANA [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 12 [name] => ASTANA [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => ASTANA [stateFromNameAlt] => Kazakhstan ) ) ) [Атырау] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 115 [name] => ATYRAU [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => ATYRAU [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 115 [name] => ATYRAU [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => ATYRAU [stateFromNameAlt] => Kazakhstan ) ) ) [Караганда] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 103 [name] => KARAGANDA [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => KARAGANDA [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 103 [name] => KARAGANDA [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => KARAGANDA [stateFromNameAlt] => Kazakhstan ) ) ) [Шымкент] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 17 [name] => SHYMKENT [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => SHYMKENT [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 17 [name] => SHYMKENT [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => SHYMKENT [stateFromNameAlt] => Kazakhstan ) ) ) [Наземное обслуживание] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 1 [name] => Наземное обслуживание [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => Ground handling [stateFromNameAlt] => Kazakhstan ) ) [1] => Array ( [0] => kompas [1] => Array ( [id] => 1457 [name] => НАЗЕМНОЕ ОБСЛУЖИВАНИЕ [stateFromKey] => 19 [stateFromName] => ТОЛЬКО ПРОЖИВАНИЕ [selected] => 0 [nameAlt] => НАЗЕМНОЕ ОБСЛУЖИВАНИЕ [stateFromNameAlt] => ТОЛЬКО ПРОЖИВАНИЕ ) ) [2] => Array ( [0] => selfie [1] => Array ( [id] => 1 [name] => Наземное обслуживание [stateFromKey] => 7 [stateFromName] => Казахстан [selected] => 0 [nameAlt] => Ground handling [stateFromNameAlt] => Kazakhstan ) ) [3] => Array ( [0] => selfie [1] => Array ( [id] => 1457 [name] => НАЗЕМНОЕ ОБСЛУЖИВАНИЕ [stateFromKey] => 19 [stateFromName] => ТОЛЬКО ПРОЖИВАНИЕ [selected] => 0 [nameAlt] => НАЗЕМНОЕ ОБСЛУЖИВАНИЕ [stateFromNameAlt] => ТОЛЬКО ПРОЖИВАНИЕ ) ) ) [Бишкек] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 912 [name] => BISHKEK [stateFromKey] => 8 [stateFromName] => Кыргызстан [selected] => 0 [nameAlt] => BISHKEK [stateFromNameAlt] => Kyrgyzstan ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 912 [name] => BISHKEK [stateFromKey] => 8 [stateFromName] => Кыргызстан [selected] => 0 [nameAlt] => BISHKEK [stateFromNameAlt] => Kyrgyzstan ) ) ) [Кишинев] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 1459 [name] => KISHINEV [stateFromKey] => 83 [stateFromName] => Молдова [selected] => 0 [nameAlt] => KISHINEV [stateFromNameAlt] => Molova ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 1459 [name] => KISHINEV [stateFromKey] => 83 [stateFromName] => Молдова [selected] => 0 [nameAlt] => KISHINEV [stateFromNameAlt] => Molova ) ) ) [Душанбе] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 136 [name] => DUSHANBE [stateFromKey] => 25 [stateFromName] => Таджикистан [selected] => 0 [nameAlt] => DUSHANBE [stateFromNameAlt] => Таджикистан ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 136 [name] => DUSHANBE [stateFromKey] => 25 [stateFromName] => Таджикистан [selected] => 0 [nameAlt] => DUSHANBE [stateFromNameAlt] => Таджикистан ) ) ) [Киев] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 911 [name] => KIEV [stateFromKey] => 10 [stateFromName] => Украина [selected] => 0 [nameAlt] => KIEV [stateFromNameAlt] => Украина ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 911 [name] => KIEV [stateFromKey] => 10 [stateFromName] => Украина [selected] => 0 [nameAlt] => KIEV [stateFromNameAlt] => Украина ) ) ) [Одесса] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 907 [name] => ODESSA [stateFromKey] => 10 [stateFromName] => Украина [selected] => 0 [nameAlt] => ODESSA [stateFromNameAlt] => Украина ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 907 [name] => ODESSA [stateFromKey] => 10 [stateFromName] => Украина [selected] => 0 [nameAlt] => ODESSA [stateFromNameAlt] => Украина ) ) ) [Экскурсионные программы] => Array ( [0] => Array ( [0] => kompas [1] => Array ( [id] => 378 [name] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [stateFromKey] => 38 [stateFromName] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [selected] => 0 [nameAlt] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [stateFromNameAlt] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ ) ) [1] => Array ( [0] => selfie [1] => Array ( [id] => 378 [name] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [stateFromKey] => 38 [stateFromName] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [selected] => 0 [nameAlt] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ [stateFromNameAlt] => ЭКСКУРСИОННЫЕ ПРОГРАММЫ ) ) ) )
		*/
	}
}
?>