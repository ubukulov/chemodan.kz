<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => 'ТАКСИ В АЭРОПОРТ | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Такси в аэропорт - Турфирма Chemodan в Казахстане';
?>
<div class="a-86a">
	<h1 class="a-97">ТАКСИ В АЭРОПОРТ</h1>
	<div class="a-252 a-252b">
		<div class="a-253"><img src="https://chemodan.kz/web/img/im52.jpg" alt="Такси в аэропорт" title="Такси в аэропорт"></div>
		<div class="a-254"><div class="a-255"><p>Только у нас в подарок такси  «Дом - Аэропорт - Дом»</p></div><div class="a-255"><span>При бронировании тура в ТК Чемодан на сумму от</span> <span style="font-weight: bold; color: black;">1 500 000 тг</span>.</div><div class="a-255">«Дом - Аэропорт - Дом» в подарок!!! </div><div class="a-255"><span>При приобретении тура на сумму до 1 499 999 тг. при желании Вам предоставляется такси</span></div><div class="a-255"><span>"Дом - Аэропорт - Дом" стоимостью</span> <span style="font-weight: bold; color: black;">3000 тг</span>.</div></div>
	</div><br>
	<div class="a-98"><p>Воспользовавшись нашей услугой, Вы всегда можете быть уверены в высоком качестве  обслуживания. Мы работаем 7дней в неделю, 365 дней в году и обслуживаем, как поздние так и ранние рейсы.</p></div>
</div>
<?php
use app\components\FormWidget;
echo FormWidget::widget(['title' => 'ПОЛУЧИТЬ ТАКСИ «Дом - Аэропорт - Дом» В ПОДАРОК', 'id' => 'taxi_btn']);
?>