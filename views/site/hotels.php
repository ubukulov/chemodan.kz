<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'ПОДБОР ОТЕЛЯ | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Подбор отеля - Турфирма Chemodan в Казахстане';
?>
<div class="a-86a">
	<h1 class="a-97">ПОДБОР ОТЕЛЯ</h1>
	<div class="a-98">Преимущество нашей компании в том, что мы сравниваем цены на номера, предлагая вам выбрать идеальный вариант по приемлемой цене. Просто напишите, куда хотите поехать, выберите даты поездки и доверьте нашему сервису сравнить цены за Вас. Богатый выбор гостиниц и номеров в разных частях мира придутся по вкусу тем, кто предпочитает комфортный отдых.</div>
	<p style="margin-top: 30px;"><script type="text/javascript" src="//ui.sletat.ru/module-4.0/core.js" charset="utf-8"></script><script type="text/javascript">sletat.HotelShowcase.$create({
  city                : 1312,
  enabledCurrencies   : ["KZT"],
  currency            : "KZT",
  backgroundMainColor : "#ebebeb"
});</script></p>
</div>
<?php
use app\components\FormWidget;
echo FormWidget::widget();
?>