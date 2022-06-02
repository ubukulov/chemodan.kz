<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'КРУИЗЫ | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Круизы - Турфирма Chemodan в Казахстане';
?>
<div class="a-86a">
	<h1 class="a-97">КРУИЗЫ</h1>
	<div class="a-98">
		<p>Классические круизы от MSC Cruises<br><br>
14 современных лайнеров, построенных в период 2001-2017 гг., увеличение круизного флота до 23 лайнеров к 2026 году</p>
	</div><br>
	<div class="a-290">
		<script src="//gocruise.ru/outside/" type="text/javascript"></script>
<script type="text/javascript">
	cesSettings = {
		email : 'callcentre1[dog]chemodan.kz',
		defaultPage : 'index',
		isRur : 3
	};
</script><!--<script src="//tse.pac.ru/v2/" type="text/javascript" language="javascript"></script><script type="text/javascript" language="javascript">tse.defaults={def_dpt_city:244356, def_country:213118, def_tour_type:25, def_currency:'RUR', email:'callcentre1[dog]chemodan.kz'};</script>-->
	</div><br>
	<div class="a-98"><p>
Заезды с русскоязычными группами с сопровождающим от PAC GROUP<br>
Пакетные предложения к круизам: Круиз + Город, Круиз + Пляж<br>
Маршруты, с отправлением из порта Санкт-Петербурга, европейских портов, Карибского и Персидского бассейнов, Южной Африки, Южной Америки<br>
Тарифы раннего бронирования, которые позволяют сэкономить до 50% стоимости круиза</p></div>
</div>
<?php
use app\components\FormWidget;
echo FormWidget::widget(['title' => 'ПОДОБРАТЬ КРУИЗ', 'id' => 'kruiz_btn']);
?>