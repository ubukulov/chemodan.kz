<?php
namespace app\components;

use yii\base\Widget;
use app\models\Currency_user;

class CurrencyWidget extends Widget {
	public function run() {
		$USD = '-';//'-';
		$EUR = '-';
// $url = 'https://data.egov.kz/api/v2/valutalar_bagamdary4/v497';
// 			$ch = curl_init();
// 			curl_setopt($ch, CURLOPT_URL, $url);
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// 			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// 			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// 			$res = json_decode(curl_exec($ch),true);//
// 			curl_close($ch);

// 			if (sizeof($res) > 0) {
// 				foreach ($res as $key=>$val) {
// 					if ((int)$val['id'] === 13) {
// 						$EUR = $val['kurs']+(($val['kurs']/100)*1);
// 					} else if ((int)$val['id'] === 12) {
// 						$USD = $val['kurs']+(($val['kurs']/100)*1);
// 					}
// 				}
// 			}
			
// 			$USD = number_format((float)$USD, 1, '.', '');
// 			$EUR = number_format((float)$EUR, 1, '.', '');


		$client  = @$_SERVER['HTTP_CLIENT_IP'];
		$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
		$remote  = @$_SERVER['REMOTE_ADDR'];
		
		$CITY = ['ALA'=>'Алматы','AST'=>'Астана','BAY'=>'Байконур','AKT'=>'Актобе','ATY'=>'Атырау','ZHA'=>'Тараз','KAR'=>'Караганда','KUS'=>'Костанай','KZY'=>'Кызыл Орда','PAV'=>'Павлодар','MNG'=>'Актау', 'SHYM' => 'Шымкент'];
		$result = '<span class="h-19">Алматы</span>';

		$lang_stat = false;

		if (isset($_COOKIE['location'])) {
			$loc = json_decode($_COOKIE['location'],true);
			$result = '<span class="h-19">'.$loc['v'].'</span>';
		} else {
		if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
		elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
		else $ip = $remote;
 		
 		$lang_stat = true;

		$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
		if($ip_data && $ip_data->geoplugin_countryName != null)
		{
			if ($ip_data->geoplugin_countryCode==='KZ') {
				if (array_key_exists($ip_data->geoplugin_regionCode, $CITY)) {
					$result = '<span class="h-19">'.$CITY[ $ip_data->geoplugin_regionCode ].'</span>';
				}
			}
		}

		}
		
 
		
		$list = '';
		foreach ($CITY as $key=>$val) {
			$list .= '<div class="a-421" onclick="return page.selLocation(this,'.htmlspecialchars(json_encode(['k'=>$key,'v'=>$val])).');">'.$val.'</div>';
		}
		return '<div class="h-15">
			<div class="h-16">Город: '.$result.'<div class="a-433" '.(!$lang_stat?'style="display: none!important;"':'').'>
				<div class="a-434"></div>
				<div class="a-435">
					<div class="a-436">Ваш Город: <span>'.$result.'</span></div>
					<div class="a-437">
						<div class="a-438" onclick="return page.cancelCity();">Нет</div>
						<div class="a-439" onclick="return page.selectCity(this);">Да</div>
					</div>
				</div>
			</div><div class="a-418" '.($lang_stat?'style="display: none!important;"':'').'><div class="a-419"></div><div class="a-420">
			'.$list.'
			</div></div></div>
			<div class="a-436a" onclick="return page.schemeMap();">Схема проезда к офису</div>
			<div class="h-17" style="display: none;">
				<div class="h-18">$ '.$USD.' KZT</div>
				<div class="h-18">€ '.$EUR.' KZT</div>
				<span style="display: none;"></span>
			</div>
		</div>';
	}
}
?>