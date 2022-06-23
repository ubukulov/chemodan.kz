<?php
namespace app\components;

use yii\base\Widget;

class sletat extends Widget {
	public $city = '';
	public $country = '';
	public function run() {
		$country_ = '';
		if ($this->country!=='') $country_ = 'country:'.$this->country.',';
		if ($this->city==='') {
			$this->city = isset($_SESSION['code'])?$_SESSION['code']:1312;
		}
		$out = '
		<script type="text/javascript" src="https://ui.sletat.ru/module-5.0/app.js" charset="utf-8"></script>
<script type="text/javascript">sletat.createModule5(\'Search\', {
  cities              : '.$this->city.',
  '.$country_.'
  files             : ["https://ui.sletat.ru/module-5.0/theme/dream_dec2015.min.css"],
  currency          : "KZT",
  usePricePerson    : true,
  agencyContact1    : {
    logo            : "http://chemodan.kz/web/img/12.png",
    header          : "Сеть турагентств Чемодан",
    email           : "Callcentre@chemodan.kz"
  },
  enabledCurrencies : ["KZT", "USD"],
  useCard           : false,
  events : {
            // Пользовательское событие открытия карточки тура. Возникает как
            // при клике на кнопке "Подробнее", так и при клике на названии отеля.
            \'tour.card\' : function () {
              dataLayer.push({
                \'event\': \'OpenTourCard\'
              });
                console.log(\'Open Tour Card\');
            },
	    //Пользовательское событие отправки данных покупки. Возникает каждый раз при успешной покупке тура.
            \'buying.submit\' : function () {
              dataLayer.push({
                \'event\': \'SendRequest\'
              });
                console.log(\'Send Request\');
            },
	    //Пользовательское событие отправки данных бронирования. Возникает каждый раз, когда данные по бронированию успешно отправлены заказчику.
 
            \'booking.submit\' : function () {
              dataLayer.push({
                \'event\': \'SendBooking\'
              });
		console.log(\'Send Booking\');
            },
 
        }
});</script>
	<span class="sletat-copyright">Идет загрузка модуля <a href="https://sletat.ru/" title="поиск туров" target="_blank">поиска туров</a> &hellip;</span> 
		';
		return $out;
	}
}
?>