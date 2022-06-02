<?php
namespace app\components;

use yii\base\Widget;

class HotTours extends Widget {
	public $country = '';
	public $city = '';
	public $type = 0;
	public function run() {

		$country_ = '';
		$city_ = '';

		if ($this->country!=='') $country_ = 'country='.$this->country;
		if ($this->city!=='') $city_ = 'city='.$this->city;

		$url = 'https://old.afinadb.kz/export.php?'.$country_.'&'.$city_;
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$res = json_decode(curl_exec($ch),true);//
		curl_close($ch);
		$out = '';
		if ($this->type === 0) {
			$city_l = [];
			$cons_city = 'Алматы';
			foreach ($res as $k=>$v) {
				$city_l[] = $v['city'];
				$data = ['date'=>$v['title'],'sum'=>$v['price'],'txt'=>$v['text'],'img'=>$v['url'],'country'=>$v['country']];
				$out .= '<div class="a-30" style="height: 370px;" data-id="'.$v['id'].'" data-city="'.$v['city'].'" '.($v['city']!=$cons_city?'style="display: none;"':'').'><div class="a-31" style="background-image: url('.$v['url'].')"><div class="a-38">'.$v['country'].'</div><div class="a-38a">- '.$v['sale'].'%</div><div class="a-38b">'.( $v['date_from']!=0?('Осталось '.$v['date_from'].' '.($v['date_from']==1?'День':(($v['date_from']==2||$v['date_from']==3||$v['date_from']==4)?'Дня':'Дней'))):'Успейте сегодня' ).'</div></div><div class="a-32"><span class="a-456">'.$this->softTrim($v['title'],70).'</span><br><span class="a-457">'.$this->softTrim($v['text'],130).'</span></div><div class="a-35" onclick="return page.tourViewSel(this);" data-id="'.htmlspecialchars(json_encode($data)).'">'.$v['price'].'</div>';
				$out .= '<div class="home_credit_btn" onclick="return page.tourCredit(this);" data-id="'.htmlspecialchars(json_encode($data)).'">Купить с рассрочкой</div></div>';
			}
			$city_l = array_unique($city_l);
			$city_m = '';
			foreach($city_l as $k=>$v) {
				$city_m .= '<div class="a-26 '.($v===$cons_city?'a-458':'').'" onclick="return page.selcityHT(this);" data-city="'.$v.'">'.$v.'</div>';
			}

			return json_encode([$city_m,$out]);

		} else {
			foreach ($res as $k=>$v) {
				$data = ['date'=>$v['title'],'sum'=>$v['price'],'txt'=>$v['text'],'img'=>$v['url'],'country'=>$v['country']];
				$out .= '<div class="a-30" data-id="'.$v['id'].'" data-city="'.$v['city'].'"><div class="a-31" style="background-image: url('.$v['url'].')"><div class="a-38">'.$v['country'].'</div><div class="a-38a">- '.$v['sale'].'%</div><div class="a-38b">'.( $v['date_from']!=0?('Осталось '.$v['date_from'].' '.($v['date_from']==1?'День':(($v['date_from']==2||$v['date_from']==3||$v['date_from']==4)?'Дня':'Дней'))):'Успейте сегодня' ).'</div></div><div class="a-32"><span class="a-456">'.$this->softTrim($v['title'],70).'</span><br><span class="a-457">'.$this->softTrim($v['text'],130).'</span></div><div class="a-35" onclick="return page.tourViewSel(this);" data-id="'.htmlspecialchars(json_encode($data)).'">'.$v['price'].'</div></div>';
			}
			return $out;
		}
	}
	public function softTrim($text, $count, $wrapText='...') {
    	if(strlen($text)>$count){
        	preg_match('/^.{0,' . $count . '}(?:.*?)\b/siu', $text, $matches);
        	$text = $matches[0];
    	} else $wrapText = '';
    	return $text.$wrapText;
	}

}
?>
