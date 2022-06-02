<?php
namespace app\components;

use yii\base\Widget;
use app\models\NTours;

class MyWidget extends Widget {

	public function timeCount($a) {
		$date = date('Y-m-d');
		$difference = abs(strtotime($a) - strtotime($date));
		return $difference/86400;
	}

	public function run() {
		//$SQL = NTours::find()->where(['ss' => '0'])->asArray()->all();
		//$SQL = Btours::find()->where(['ss' => '0','DATE(`time`)'=>date('Y-m-d')])->asArray()->all();
		return '';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://kompastour.kz/");
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$out = curl_exec($ch);
		$regex_pattern = "/\<div class=\"js_callback\"\>(.*?)\<\/div\>/is";
		preg_match_all($regex_pattern,$out,$matches);
		curl_close($ch);
		return $matches[1][1];

		$html = '';

		$names = ['india'=>'Индия','dubai'=>'Дубай','tbilisi'=>'Тбилиси','turkey'=>'Турция','thailand'=>'Тайланд','dominicana'=>'Доминикана'];
		foreach ($SQL as $key => $value) {

			//$day = $this->timeCount($value['time']);
			$html .= '<td><div class="a-30" data-id="'.$value['id'].'" onclick="return page.tourViewSel(this);" data-id="'.htmlspecialchars(json_encode($value)).'"><div class="a-31" style="background-image: url('.$value['img'].')"><div class="a-38">'.$value['country'].'</div></div><div class="a-32">'.$value['txt'].'</div><div class="a-34" style="display: none;">Осталось </div><div class="a-35">Цена: '.$value['sum'].'</div><div class="a-36"><a href="/search?id='.$value['id'].'" style="display: none;"><button class="a-37" onclick="return page.showFullInfo(this,page.stop(event));" data-id="'.htmlspecialchars(json_encode($value)).'">Посмотреть тур</button></a></div></div></td>';

		}

		return '<table><tr>'.$html.'</tr></table>';

		if (sizeof($SQL) === 0) {

			$url = 'http://online.kompastour.kz/export/default.php?samo_action=api&version=1.0&oauth_token=43fc8ef36c7749f189c9a7680c37cfb6&type=xml&action=SearchTour_PRICES&STATEINC=17&TOWNFROMINC=9&CHECKIN_BEG=20190129&CHECKIN_END=20190229&NIGHTS_FROM=10&NIGHTS_TILL=14&ADULT=1&CHILD=0&AGES&CURRENCY=3&PACKET=0&PRICEPAGE';
			$url = 'http://online.kompastour.kz/export/default.php?samo_action=api&version=1.0&oauth_token=43fc8ef36c7749f189c9a7680c37cfb6&type=xml&action=SearchTour_TOWNFROMS&TOWNTOINC=29';
			$url = 'http://online.selfietravel.kz/default.php?page=search_tour&samo_action=PRICES&TOWNFROMINC=1344&STATEINC=9&TOURINC=0&CHECKIN_BEG=20190131&NIGHTS_FROM=7&CHECKIN_END=20190207&NIGHTS_TILL=14&ADULT=2&CURRENCY=4&CHILD=0&TOWNS_ANY=1&TOWNS=&STARS_ANY=1&STARS=&hotelsearch=0&HOTELS_ANY=1&HOTELS=&MEALS_ANY=1&MEALS=&FREIGHT=0&FILTER=0&MOMENT_CONFIRM=0&HOTELTYPES=&PACKET=0&PARTITION_PRICE=&PRICEPAGE=1&rev=3099927416&_=1548758762391';
			$url = 'http://online.selfietravel.kz/export/default.php?samo_action=api&version=1.0&oauth_token=65ab35a3512e412e9b3c4560ea13a98a&action=SearchTour_TOWNFROMS';
			/*
			HTTP/1.1 401 Unauthorized Server: nginx/1.10.3 (Ubuntu) Date: Tue, 29 Jan 2019 07:37:54 GMT Content-Type: text/html; charset=utf-8 Transfer-Encoding: chunked Connection: keep-alive WWW-Authenticate: OAuth realm='Service', error='invalid_token', error_description='The access token provided is invalid.', scope='online-api'
			*/

			$ch = curl_init();

			curl_setopt($ch, CURLOPT_URL, $url );
			curl_setopt($ch, CURLOPT_HEADER, true);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300); 
			curl_setopt($ch, CURLOPT_TIMEOUT, 300); //timeout in seconds
			$data = curl_exec($ch);
			//$html = $data;

		}
		

		//<div class="a-33">'.$value['txt'].'</div>
		

		function cityNames($a) {

			if ($a === 'AKTAU') return 'Актау';
			elseif ($a === 'AKTOBE') return 'Актобе'; 
			elseif ($a === 'ALMATY') return 'Алматы';
			elseif ($a === 'ASTANA') return 'Астана';
			elseif ($a === 'ATYRAU') return 'Атырау';
			elseif ($a === 'KARAGANDA') return 'Караганда';
			elseif ($a === 'SHYMKENT') return 'Шымкент';
			elseif ($a === 'BISHKEK') return 'Бишкек';
			elseif ($a === 'KISHINEV') return 'Кишинев';
			elseif ($a === 'НАЗЕМНОЕ ОБСЛУЖИВАНИЕ') return 'Наземное обслуживание';
			elseif ($a === 'DUSHANBE') return 'Душанбе';
			elseif ($a === 'KIEV') return 'Киев';
			elseif ($a === 'ODESSA') return 'Одесса';
			elseif ($a === 'ЭКСКУРСИОННЫЕ ПРОГРАММЫ') return 'Экскурсионные программы';
			return $a;

		}

		$out = [];
		$city = '';

		$URL = json_decode(file_get_contents('http://online.selfietravel.kz/export/default.php?samo_action=api&version=1.0&oauth_token=65ab35a3512e412e9b3c4560ea13a98a&type=json&action=SearchTour_TOURS&stateinc=9&townfrominc=17'),true);

		

		return print_r( $URL );

		/*

			{"TheBest_ALL":{"TOWNS":"","STARS":"","CURRENCIES":[{"id":3,"name":"euro","nameAlt":"\u0435\u0432\u0440\u043e","rates":[{"id":3,"nominal":1,"value":"1","alias":"EUR"},{"id":1,"nominal":1,"value":"425","alias":"KZT"},{"id":2,"nominal":1,"value":"1.15803815","alias":"USD"}],"selected":0,"alias":"EUR"},{"id":1,"name":"tenge","nameAlt":"KZT","rates":[{"id":3,"nominal":1,"value":"0.00235294","alias":"EUR"},{"id":1,"nominal":1,"value":"1","alias":"KZT"},{"id":2,"nominal":1,"value":"0.0027248","alias":"USD"}],"selected":1,"alias":"KZT"},{"id":2,"name":"US dollar","nameAlt":"\u0434\u043e\u043b\u043b\u0430\u0440 \u0421\u0428\u0410","rates":[{"id":3,"nominal":1,"value":"0.86352941","alias":"EUR"},{"id":1,"nominal":1,"value":"367","alias":"KZT"},{"id":2,"nominal":1,"value":"1","alias":"USD"}],"selected":0,"alias":"USD"}]}}

		*/

		/*
$kompas = json_decode(file_get_contents('http://online.kompastour.kz/export/default.php?samo_action=api&version=1.0&oauth_token=43fc8ef36c7749f189c9a7680c37cfb6&type=json&action=TheBest_TOWNFROMS'),true);

		foreach ($kompas['TheBest_TOWNFROMS'] as &$val) $out[ cityNames($val['name']) ][] = ['kompas', $val];
		
		$selfie = json_decode(file_get_contents('http://online.selfietravel.kz/export/default.php?samo_action=api&version=1.0&oauth_token=65ab35a3512e412e9b3c4560ea13a98a&type=json&action=TheBest_TOWNFROMS'),true);

		foreach ($kompas['TheBest_TOWNFROMS'] as &$val) $out[ cityNames($val['name']) ][] = ['selfie', $val];

		$city = $turkey = '';
		$i = 0;

		foreach ($out as $key => $value) {
			$city .= '<div class="a-15 '.($i===0?'a-15a':'').'">'.$key.'</div>';
			
			foreach ($value as $k=>$v) {

				if ($v[0] === 'kompas') {
					$URL = json_decode(file_get_contents('http://online.kompastour.kz/export/default.php?samo_action=api&version=1.0&oauth_token=43fc8ef36c7749f189c9a7680c37cfb6&type=json&action=TheBest_ALL&stateinc=17&townfrominc='.$v[1]['stateFromKey']),true);
				} elseif ($v[0] === 'selfie') {
					$URL = json_decode(file_get_contents('http://online.selfietravel.kz/export/default.php?samo_action=api&version=1.0&oauth_token=65ab35a3512e412e9b3c4560ea13a98a&type=json&action=TheBest_ALL&stateinc=9&townfrominc='.$v[1]['stateFromKey']),true);
				}

				//{"TheBest_ALL":{"TOWNS":"","STARS":"","CURRENCIES":[{"id":3,"name":"euro","nameAlt":"\u0435\u0432\u0440\u043e","rates":[{"id":3,"nominal":1,"value":"1","alias":"EUR"},{"id":1,"nominal":1,"value":"425","alias":"KZT"},{"id":2,"nominal":1,"value":"1.15803815","alias":"USD"}],"selected":0,"alias":"EUR"},{"id":1,"name":"tenge","nameAlt":"KZT","rates":[{"id":3,"nominal":1,"value":"0.00235294","alias":"EUR"},{"id":1,"nominal":1,"value":"1","alias":"KZT"},{"id":2,"nominal":1,"value":"0.0027248","alias":"USD"}],"selected":1,"alias":"KZT"},{"id":2,"name":"US dollar","nameAlt":"\u0434\u043e\u043b\u043b\u0430\u0440 \u0421\u0428\u0410","rates":[{"id":3,"nominal":1,"value":"0.86352941","alias":"EUR"},{"id":1,"nominal":1,"value":"367","alias":"KZT"},{"id":2,"nominal":1,"value":"1","alias":"USD"}],"selected":0,"alias":"USD"}]}}

			}

			$i++;
		}
		*/

		
	}
}
?>