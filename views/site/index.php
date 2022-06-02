<?php

use app\components\TourWidget;
use app\components\HotTours;
use app\components\CommentWidget;
$this->registerMetaTag(['name' => 'yandex-verification', 'content' => '2bc19f23cd3dc294']);
$this->registerMetaTag(['name' => 'keywords', 'content' => ' - ']);
$this->registerMetaTag(['name' => 'description', 'content' => ' - Турагенство в Алматы Chemodan.kz предлагает широкий выбор туров по самым низким ценам. Заходите и выбирайте тур подходящий для вас!']);
//$this->registerMetaTag(['http-equiv' => 'ETag', 'content' => 'ed7487d9c6c410de3a9cd2d97246d577']);
//$this->registerMetaTag(['http-equiv' => 'Vary', 'content' => 'User-Agent']);
$this->registerMetaTag(['name' => 'robots', 'content' => 'index, follow']);
$this->registerMetaTag(['name' => 'autor', 'content' => '']);
$this->registerMetaTag(['name' => 'copyright', 'content' => '']);
$this->registerMetaTag(['property' => 'og:locale', 'content' => 'ru_RU']);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:title', 'content' => 'Турфирма Chemodan в Казахстане']);
$this->registerMetaTag(['property' => 'og:description', 'content' => 'Турагенство в Алматы Chemodan.kz предлагает широкий выбор туров по самым низким ценам. Заходите и выбирайте тур подходящий для вас!']);
$this->registerMetaTag(['property' => 'og:image', 'content' => 'http://chemodan.kz/images/logo_ch.png']);
$this->registerMetaTag(['property' => 'og:url', 'content' => 'http://chemodan.kz/']);
$this->registerMetaTag(['property' => 'og:site_name', 'content' => 'Турфирма Chemodan в Казахстане']);

$this->title = 'Туристическое агентство в Алматы - Турфирма Chemodan в Казахстане';

$from = '<div class="a-150">
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="0">Алматы</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="2">Астана</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="4">Караганда</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="6">Актобе</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="8">Актау</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="10">Уральск</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="1">Усть - Каменогорск</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="3">Атырау</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="5">Шымкент</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="7">Костанай</div>
<div class="a-151" onclick="return page.selItem(this);" data-country="0" data-id="9">Павлодар</div>
</div>';
$to = '<div class="a-150 a-150a" style="display: none;">
<div class="a-151" onclick="return page.selItemTo(this);" data-country="2">Турция</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="23">ОАЭ</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="3">Китай</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="4">Египет</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="5">Тайланд</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="12">Израиль</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="15">Испания</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="16">Италия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="6">Индия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="30">Греция</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="18">Мальдивы</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="32">Куба</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="21">Шри Ланка</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="8">Грузия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="31">Кипр</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="6">Тунис</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="11">Доминикана</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="26">Австрия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="7">Азербайджан</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="27">Андорра</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="10">Венгрия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="14">Индонезия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="37">Португалия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="23">Кыргызстан</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="17">Малайзия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="1">Россия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="20">Словения</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="25">Украина</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="22">Франция</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="9">Чехия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="38">Сейшелы</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="33">Латвия</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="34">Литва</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="28">Беларусь</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="29">Болгария</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="35">Маврикии</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="36">Мексика</div>
<div class="a-151" onclick="return page.selItemTo(this);" data-country="39">Эстония</div>
</div>';
$days = '<div class="a-150 a-150b">
<div class="a-151" onclick="return page.selItemDay(this);" data-day="7">7</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="8">8</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="9">9</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="10">10</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="11">11</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="12">12</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="13">13</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="14">14</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="15">15</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="16">16</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="17">17</div>
<div class="a-151" onclick="return page.selItemDay(this);" data-day="18">18</div>
</div>';
$stars = '<div class="a-150 a-150c">
<div class="a-151" onclick="return page.selItemStar(this);">1-5</div>
<div class="a-151" onclick="return page.selItemStar(this);">1</div>
<div class="a-151" onclick="return page.selItemStar(this);">2</div>
<div class="a-151" onclick="return page.selItemStar(this);">3</div>
<div class="a-151" onclick="return page.selItemStar(this);">4</div>
<div class="a-151" onclick="return page.selItemStar(this);">5</div>
</div>';
$people = '<div class="a-150 a-150d">
<div class="a-152">Взрослые</div>
<div class="a-153"><div class="a-154" onclick="return page.adultRemove(this)"></div><div class="a-154">2</div><div class="a-154" onclick="return page.adultAdd(this)"></div></div>
<div class="a-152">Дети</div>
<div class="a-153"><div class="a-154" onclick="return page.childRemove(this)"></div><div class="a-154">0</div><div class="a-154" onclick="return page.childAdd(this)"></div></div>
<div class="a-266"></div>
</div>';

$date_list = '';

$today = explode(' ',date('Y m d'));

$start = explode(' ',date('Y-m-01'));

$end = explode(' ',date("Y m t"));

$week_start = date('w', strtotime(date('Y-m-01')));

$status = false;

$counter = 1;
for ($i=0;$i<42;$i++) {

	if ((($i%7)+1) == $week_start) $status = true;
	$k = '';
	if ($status&&($counter<=$end[2])) $k = $counter++;
	if ($k !== '') {
		if (($k >= $today[2]) && ($k <= $end[2])) {
			$date_list .= '<div class="a-163 '.($k == $today[2]? 'a-163b':'').'" onclick="return page.selDate(this)" data-day="'.$k.'" data-month="'.$today[1].'" data-year="'.$today[0].'">'.$k.'</div>';
		} else $date_list .= '<div class="a-163 a-163a">'.$k.'</div>';
	} else $date_list .= '<div class="a-163">'.$k.'</div>';
}

$month_name = ['Январь','Февраль','Март','Апрель','Май','Июнь','Июль','Август','Сентябрь','Октябрь','Ноябрь','Декабрь'];

$cur_month = $month_name[$today[1]-1];
$detect = new Mobile_Detect;

$date_ = '<div class="a-150 a-150e">
<div class="a-155"><div class="a-156"></div><div class="a-157" data-day="'.$today[2].'" data-month="'.$today[1].'" data-year="'.$today[0].'">'.$cur_month.'</div><div class="a-158" onclick="return page.nextMonth();"></div></div>
<div class="a-159a"><div class="a-159b">Пн</div><div class="a-159b">Вт</div><div class="a-159b">Ср</div><div class="a-159b">Чт</div><div class="a-159b">Пт</div><div class="a-159b">Сб</div><div class="a-159b">Вс</div></div>
<div class="a-159">'.$date_list.'</div>
<div class="a-160" onclick="return page.dateAdditional(this)"><div class="a-161 a-161a"></div><div class="a-162">± 3 дня от выбранной даты</div></div>
</div>';
?>
<link rel="stylesheet" type="text/css" href="/css/slick.min.css">
<link rel="stylesheet" type="text/css" href="/css/slick-theme.min.css">
<div class="slider slider1">
	<div><div class="im1 img-1"></div><div class="im2 img-1-1"></div><div class="im3 img-2-1"></div></div>
	<div><div class="im1 img-2"></div><div class="im2 img-1-2"></div><div class="im3 img-2-2"></div></div>
	<div><div class="im1 img-3"></div><div class="im2 img-1-3"></div><div class="im3 img-2-3"></div></div>
	<div><div class="im1 img-4"></div><div class="im2 img-1-4"></div><div class="im3 img-2-4"></div></div>
	<div><div class="im1 img-5"></div><div class="im2 img-1-5"></div><div class="im3 img-2-5"></div></div>
	<div><div class="im1 img-6"></div><div class="im2 img-1-6"></div><div class="im3 img-2-6"></div></div>
	
</div>
<div class="a-2">
	<div class="a-84"><span>Путешествуйте с комфортом</span></div>
	<div class="a-85"><span>Организуем незабываемый отдых.</span></div>

	<div class="a-85a" style="display: none;"><button class="a-85b" onclick="return page.mobileView(this);">Поиск тура</button></div>
	<div class="a-3" style="display: none;">
		<button class="a-3a" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);">Из <span data-country="0" data-id="0">Алматы</span><?php echo $from ?></button>
		<button class="a-3b" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);"><span data-country="2">Турция</span><?php echo $to ?></button>
		<button class="a-3c" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);"><span class="sel-date" data-date="<?php echo date('d.m')?>" data-day="<?php echo date('d'); ?>" data-month="<?php echo date('m');?>" data-year="<?php echo date('Y') ?>"><?php echo date('d.m')?></span> <span data-add="0" class="additional">+3</span><?php echo $date_ ?></button>
		<button class="a-3c" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);"><span data-day="7">7-9</span> Дней<?php echo $days ?></button>
		<button class="a-3c" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);"><span data-star="1-5">1-5</span> Звезд<?php echo $stars ?></button>
		<button class="a-3c" onclick="return page.showMenuIn(this);" onmousedown="return page.stop(event);"><span class="adult" data-id="2">2</span> Взр <span class="child" data-id="0"></span><?php echo $people ?></button>
		<button class="a-3d" onclick="return page.readyGetSearch(this);">Поиск</button>
	</div>
</div>
<div class="a-1" style="height: 0px;"></div>
<div class="hcb">
    <a href="https://sb.homecredit.kz/instagram/onlinezayavka/v2/turagentstvo_chemodan/#/" target="_blank" rel="nofollow" class="banner-block banner-block-wide  home-credit" style="display: block; height: 91px;background: url(/img/hcb_ras.png) center no-repeat #DA0025; background-size: auto 91px">
        <div class="container"></div>
    </a>
</div>
<div class="a-440" onclick="return page.requestClient();">Подберите мне тур</div>
<style>
	.app__wrapper {
		min-height: 100%;
	}
</style>
<div class="a-290" style="margin-top: 50px;">	
	<!--<iframe id="triphacker_fr" src="https://triphacker.kz/widget" style="border:0; height: 1000px; border: 0; width: 100%;"></iframe>-->
	<iframe id="triphacker_fr" src="https://triphacker.kz/widget?company_id=175" style="border:0; height: 1000px; border: 0; width: 100%;"></iframe>
</div>

<div class="a-4">
	<!--<iframe src="https://triphacker.kz/hot_tour/widget?company_id=175" border="0" width="100%" height="700px" style="border:0"></iframe>-->
	<!--<div class="a-5"><span>Горящие туры</span></div>-->
	<div class="a-6">
		
		<div class="a-7">
			<div class="a-8">
			<div class="a-9" style="display: none;">
				<div class="a-10"><span>Акции</span></div>
			</div>
			<a href="/promo/turkey" style="display: none;"><div class="a-297">
				<div class="a-18 a-298"></div>
				<div class="a-299">Турция</div>
				</div></a>
			<a href="/promo/promo_italy" style="display: none;"><div class="a-297">
				<div class="a-18 a-298" style="background-image: url(/img/it.svg)"></div>
				<div class="a-299">Италия</div>
				</div></a>
			<!--
			<div class="a-9">
				<div class="a-10"><span>Лучшие цены на туры</span></div>
				<div class="a-11"><span>Популярные направления</span></div>
			</div>-->
			<?php //echo TourWidget::widget(); ?>
		</div>
			<?php //$HT = json_decode(HotTours::widget(),true); ?>
			<!--
			<div class="a-22">
				<div class="a-23">
					<div class="a-24">
						<span><div class="a-25">Самые лучшие предложения</div></span>
						<span><?php //echo $HT[0]; ?></span>
					</div>
					<div class="a-27"><div onclick="return page.moveLeft();"></div><div onclick="return page.moveRight();"></div></div>
				</div>
				<div class="a-28">
					<div class="a-29"><?php //echo $HT[1]; ?></div>
				</div>
			</div> -->
			

			<style>
				.comments {
				  width: 350px;
				  height: 300px;
				}
				.slick-prev:before {
				    font-size: 70px !important;
				    color: #00569C !important;
				    left: 450px;
				    top: 180px;
				    background: white;
				    position: absolute;
				}
				.slick-next:before {
				  font-size: 70px !important;
				    color: #00569C !important;
				    left: -550px;
				    top: 180px;
				    background: white;
				    position: absolute;
				}
				.review_video_title {
					font-size: 30px;
				    margin: 50px 0 30px 0;
				    color: #3783a2;
				    text-transform: uppercase;
				    text-align: center;
				}

				@media (min-width: 320px) and (max-width: 767px) {
					.slick-prev:before {
					    font-size: 40px !important;
					    color: #00569C !important;
					    left: 120px;
					    top: 170px;
					    background: white;
					    position: absolute;
					}
					.slick-next:before {
					  	font-size: 40px !important;
					    color: #00569C !important;
					    left: -140px;
					    top: 170px;
					    background: white;
					    position: absolute;
					}
					.review_video_title {
						font-size: 18px;
					    padding-left: 20px;
					    margin: 10px 0 10px 0;
					}
				}
				
			</style>
			<div class="container" style="margin-bottom: 100px;">
				<div class="row">
				<div class="col-md-12">
					<div class="review_video_title"><span>Видео отзывы</span></div>
					<div class="slider_com">
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/nAgV3kOpCvo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/p_AYB0PcDhI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/6OHAn2US2gU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/QWSR88jkMNE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/oIGCZ7F4sNc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/Ki6n16zrSrE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/-D4wsXTxSH4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/UKKnoXL6dIc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/8dkqxWBUias" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/HTo9DLpIey0" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
						<div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/WTLOl83B70Y" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
						<div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/QlxymaiU6ek" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/tS2SbhcJTfY" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/7r-0_FJ-9ng" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/6HbxMgtJu3E" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<!--<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/Q61XPCAY6gg" style="border: 0;" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/A9rjHj0NTpY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
							<iframe class="comments" src="https://www.youtube.com/embed/EnGWnZOgADk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						</div>
						<div class="slider_com_content">
			                <iframe class="comments" src="https://www.youtube.com/embed/0ymtfIT2SHo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
						<div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/8_MFVp8v8yI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/9faGkcAqcfI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
						<div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/hJ0bCwaViTQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/WCWpItEgQbY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/QUyQqpMzU78" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
						<div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/EQHcR1Fjr18" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/IF1N_1AZb6o" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/ytccpDXJH94" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/DL-C5SHs7dk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/gRbanBzTi8c" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                    <iframe class="comments" src="https://www.youtube.com/embed/FxTStfoiLmM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
		                <div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/sL-puRY1xnU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
			            <div class="slider_com_content">
			                <iframe class="comments" src="https://www.youtube.com/embed/RaEOoZ3vh3I" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
			            <div class="slider_com_content">
		                  <iframe class="comments" src="https://www.youtube.com/embed/liMCbT2m_1Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		                </div>
			            <div class="slider_com_content">
			                <iframe class="comments" src="https://www.youtube.com/embed/AAcDMWi8Yw0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
			            <div class="slider_com_content">
			              <iframe class="comments" src="https://www.youtube.com/embed/mWKFd6B0ka0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
			            <div class="slider_com_content">
			              <iframe class="comments" src="https://www.youtube.com/embed/YuM64IznXLg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			            </div>
						-->
			          </div>

			        </div>
				</div>				
			</div>
			</div>

			<script src="/js/slick.min.js"></script>

			<?php if($detect->isMobile()) :?>
		    <script type="text/javascript">
		        $('.slider_com').slick({
		          autoplay: false,
		          arrows : true,
		          dots : false,
		        });  
		    </script>
		    <?php else: ?>
		    <script type="text/javascript">
		        $('.slider_com').slick({
				  infinite: true,
				  slidesToShow: 3,
				  slidesToScroll: 3
				});
		    </script>
		    <?php endif; ?>
		    
			<div class="a-39" style="overflow: inherit;">
				<div class="a-40"><span>Наши преимущества</span></div>
				<div class="a-41">
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Работаем для счастья других людей</span></div><div class="a-45 a-45a"></div><div class="a-46"><p>Kаждый сотрудник работает так, чтобы максимально приблизиться к этому. Каждый менеджер знает и помнит: Мы не продаем туры и не оказываем услуги, мы делаем все, чтобы с нами человек стал счастливым.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Дарим подарки каждому туристу</span></div><div class="a-45 a-45c"></div><div class="a-46"><p>Сертификаты и скидки в лучшие заведения города, сертификаты на бесплатные услуги, а также брэндированные кружки, обложки на паспорта, фирменный шоколад и многое другое.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Помощь другим людям</span></div><div class="a-45 a-45h"></div><div class="a-46"><p>Наш коллектив объединён целью помогать другим людям, нести в общество добро, желанием развиваться и заниматься самообразованием как в профессиональной, так и в духовной области.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Работаем в праздники</span></div><div class="a-45 a-45d"></div><div class="a-46"><p>Мы работаем для Вас без выходных, без перерывов, без праздничных дней.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">На связи 24/7</span></div><div class="a-45 a-45d"></div><div class="a-46"><p>Наши менеджеры на связи 24 часа в сутки, 365 дней в году.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Такси в подарок</span></div><div class="a-45 a-45f"></div><div class="a-46"><p>Только мы предоставляем такси в аэропорт и обратно В ПОДАРОК.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Бонусная программа</span></div><div class="a-45 a-45b"></div><div class="a-46"><p>У нас разработана накопительная бонусная программа для каждого клиента.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Тур в рассрочку</span></div><div class="a-45 a-45e"></div><div class="a-46"><p>У нас можно оформить тур в рассрочку от Банка, а также предоставляется рассрочка от нашей компании, без банков и переплат.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Официальное оформление</span></div><div class="a-45 a-45g"></div><div class="a-46"><p>Полностью официальное оформление туров, договоры, фискальные чеки, что дает Вам защиту в случае форс-мажорных обстоятельств, различные виды страхования, которые повысят Вашу защищённость.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Благотворительность</span></div><div class="a-45 a-45a" style="background-image: url(/img/ic10.png);"></div><div class="a-46"><p>Наша компания на постоянной основе оказывает благотворительную помощь нуждающимся самостоятельно и посредством общественных организаций, занимающимся поддержкой малообеспеченных слоёв населения нашей страны. Отдыхая с Чемоданом, Вы участвуете в помощи этим людям.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Полное сопровождение клиента</span></div><div class="a-45 a-45i"></div><div class="a-46"><p>Весь наш коллектив, всем сердцем, желает каждому нашему клиенту прекрасного, счастливого отдыха. Именно поэтому, мы решаем все вопросы, связанные с Вашими поездками круглосуточно и без выходных. Основной принцип нашей работы - полное сопровождение клиента специалистами нашей компании на протяжении всего путешествия, а также и после него.</p></div></div>
					<div class="a-42"><div class="a-47"><span style="font-weight: bold;">Сделано в Казахстане</span></div><div class="a-45 a-45i" style="background-image: url(/img/KZ.png);"></div><div class="a-46"><p>Национальный бренд, созданный с любовью на территории Казахстана с филиалами в разных уголках страны. Мы стремимся оказывать самый высокий стандарт оказываемых услуг для наших Туристов.</p></div></div>
				</div>
			</div>
			    	


			<div class="a-39" style="overflow: inherit;">
				<div class="a-40"><span>Отзывы о нас</span></div>
				<div class="a-55a">
					<?php $comment = json_decode(CommentWidget::widget(),true); ?>
					<div class="a-55b">
					<table><tr><?php echo $comment[0]; ?></tr></table>
					</div>
				</div>
				<div class="a-55"><?php echo $comment[1]; ?><a href="/reviews" class="h-21c"><div class="a-262">Показать все отзывы</div></a></div>
			</div>
			<div class="a-39">
				<div class="a-40"><span>Наши офисы</span></div>
				<div class="a-428">
					<div class="a-429" style="display:none">
						<div class="a-430" style="background-image: url(/img/im9.bmp);"></div>
						<div class="a-431">АЛМАТЫ, ОФИС 1</div>
						<div class="a-432">г. Алматы, ул. Желтоксан 159 <a href="tel:+7 (727) 346 82 20">+7 (727) 346 82 20</a></div>
					</div>
					<div class="a-429" style="display:none">
						<div class="a-430" style="background-image: url(/img/im10.jpg);"></div>
						<div class="a-431">АЛМАТЫ, ОФИС 2</div>
						<div class="a-432">г. Алматы, ул. Жандосова 20 <a href="tel:+7 (727) 346 82 20">+7 (727) 346 82 20</a></div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/office3.jpeg);"></div>
						<div class="a-431">АЛМАТЫ</div>
						<div class="a-432">г. Алматы, ул. Шевченко 146<br><a href="tel:+7 (727) 346 84 78">+7 (727) 346 84 78</a></div>
					</div>
					
					<div class="a-429" style="display: none;">
						<div class="a-430" style="background-image: url(/img/city-3.jpg)"></div>
						<div class="a-431">ТАРАЗ</div>
						<div class="a-432">9 мкрн дом 67 <a href="tel:+7 (771) 158 11 33">+7 (771) 158 11 33</a></div>
					</div>
					<div class="a-429" style="display: none;">
						<div class="a-430" style="background-image: url(/img/city-1.jpg)"></div>
						<div class="a-431">ТАЛДЫКОРГАН</div>
						<div class="a-432">Ул. Шевченко 130, оф. 16 <a href="tel:+7 (778) 106 89 90">+7 (778) 106 89 90</a>
						<br><br>
						<p class="fr_dp5" style="display: none;"><a href="/files/Справка_о_госрегистрации_талдыкорган.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан</a></p>

						<p class="fr_dp5" style="display: none;"><a href="/files/KZ74UWG00001996_ru.pdf" target="_blank">Гос реестр туризма СТА Чемодан</a></p>

						<button type="button" onclick="javascript:showDocs(5);" id="fr_doc5" class="btn btn-success">Документы компании</button>	
						</div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/city-2.jpg)"></div>
						<div class="a-431">Актобе</div>
						<div class="a-432">ул. Есет Батыра 116г <a href="tel:+7 (771) 310 77 47">+7 (771) 310 77 47</a>, <a href="tel:+7 (771) 310 74 70">+7 (771) 310 74 70</a>, <a href="tel:+7 (771) 310 74 64">+7 (771) 310 74 64</a>
						<br><br>
						<p class="fr_dp6" style="display: none;"><a href="/files/shepDownloadPdf_актобе.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан</a></p>

						<p class="fr_dp6" style="display: none;"><a href="/files/fe974bbe-ed8d-40b3-91a5-54570bff6f6a_актобе.jpg" target="_blank">Гос реестр туризма СТА Чемодан</a></p>

						<button type="button" onclick="javascript:showDocs(6);" id="fr_doc6" class="btn btn-success">Документы компании</button>	
						</div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/city-4.jpg)"></div>
						<div class="a-431">Актау</div>
						<div class="a-432">14 мкр, Здание 58/1 БЦ Форум, Вход с торца здания <br> <a href="tel:+7 702 191 7055">+7 702 191 7055</a></div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/city-6.jpeg)"></div>
						<div class="a-431">Нур-Султан №7</div>
						<div class="a-432">Ул.23-15, дом 11/3, ЖК Millennium Park, офис Чемодан &nbsp;&nbsp;<br><a href="tel:+7 (747) 094 71 75">+7 (747) 094 71 75</a>
						<br><br>
						<p class="fr_dp7" style="display: none;"><a href="/files/P34.01-ru-10100330334393_7.pdf" target="_blank">Свидетельство о регистрации СТА Чемодан №7</a></p>

						<p class="fr_dp7" style="display: none;"><a href="/files/талон_уведомление_7.pdf" target="_blank">Гос реестр туризма СТА Чемодан №7</a></p>

						<button type="button" onclick="javascript:showDocs(7);" id="fr_doc7" class="btn btn-success">Документы компании</button>
						</div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/city-7.jpeg)"></div>
						<div class="a-431">Нур-Султан №8</div>
						<div class="a-432">БЦ Болашак, Сарыарка 3/1, офис 301/1 <a href="tel:+7 (747) 094 45 02">+7 (747) 094 45 02</a>, <a href="tel:+7 (747) 094 45 03">+7 (747) 094 45 03</a>, <a href="tel:+7 (747) 094 45 04">+7 (747) 094 45 04</a>
						<br><br>
						<p class="fr_dp8" style="display: none;"><a href="/files/f00dcfc0-68d9-4cfc-8914-ac8250ed7111.jpg" target="_blank">Свидетельство о регистрации СТА Чемодан №8</a></p>

						<p class="fr_dp8" style="display: none;"><a href="/files/KZ85UWG00001410_ru.pdf" target="_blank">Гос реестр туризма СТА Чемодан №8</a></p>

						<button type="button" onclick="javascript:showDocs(8);" id="fr_doc8" class="btn btn-success">Документы компании</button>
						</div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/chem-11.jpeg)"></div>
						<div class="a-431">Шымкент №11</div>
						<div class="a-432">г. Шымкент, проспект Тауке хана 60 <a href="tel:+77018000951">+7 (701) 800 09 51</a>, <a href="tel:+7 747 288 9498">+7 (747) 288 94 98</a></div>
					</div>
					<div class="a-429">
						<div class="a-430" style="background-image: url(/img/office-12.jpeg)"></div>
						<div class="a-431">Атырау №12</div>
						<div class="a-432">г. Атырау, ул. Абая Кунанбаева, дом 19Б, офис №3 <a href="tel:+77078778855">+7 (707) 877 88 55</a>, <a href="tel:+77020666617">+7 (702) 066 66 17</a>, <a href="tel:+77780666617">+7 (778) 066 66 17</a></div>
					</div>

					<script type="text/javascript">
						function showDocs(id){
							$('.fr_dp'+id).toggle();
							$('#fr_doc'+id).text($('#fr_doc'+id).text() == 'Документы компании' ? 'Скрыть документы' : 'Документы компании');
						}
					</script>
				</div>
			</div>
			<div class="a-39">
				<div class="a-40"><span>Наши партнеры</span></div>
				<div class="a-56">
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57"></div>
					<div class="a-57" style="background: url(/img/pro-tour.svg) no-repeat center;background-size: 130px;"></div>
					<div class="a-57" style="background: url(/img/selfie.png) no-repeat center;background-size: 130px;"></div>
				</div>
			</div>
			<div class="a-39">
				<div class="a-261">
					<div class="a-58"><h1 style="font-size: inherit;font-weight: bold;">Туристическое агенство в казахстане</h1></div>
					<div class="a-59"><span style="font-size: inherit;font-weight: bold;">турфирма Chemodan</span></div>
					<div class="a-60"><p>Турагенства Алматы предлагают большое разнообразие путевок. Часто бывает так, что люди всю жизнь не уезжают за пределы своего города или области. Если вы не хотите всю жизнь просидеть на одном месте – пора отправляться в путешествие! Chemodan открывает новые горизонты для всех желающих расширить свой кругозор и увидеть мир. Турагентство в Алматы поможет вам заново открыть красоту этого мира, отдохнуть от серого быта и стать главным героем сказки, под названием «путешествие». Часто бывает так, что постоянная рутина, и жизнь в духе работа-дом/дом-работа выжимают из нас последние силы. Если долго находиться в таком состоянии можно почувствовать признаки апатии и наступающей депрессии. Чтобы такая ужасная ситуация не произошла с вами нужно регулярно менять обстановку. Конечно, ездить в отпуск каждый месяц не получится, но нужно устраивать себе интересные выходные, чтобы «отключаться» от жизненной суеты. Турагентство в Алматы Chemodan займется планированием отпуска для вас в любое время года.</p></div>
					
				<div class="a-265" onclick="return page.readyAll();">Читать больше</div>
				<div class="a-264">
					<div class="a-59"><span style="font-size: inherit;font-weight: bold;">Туристическая фирма в Алматы</span></div>
				<div class="a-60"><p>Существует множество направлений, которые предлагают турагентства Алматы, и которые будут интересны и увлекательны. Каждая страна, ее культура, кухня и традиции уникальны. Иногда не стоит выбирать что-то одно, ведь можно вместить в 2-х недельный отпуск несколько стран. Мы готовы отправить вас в самые прекрасные уголки планеты:<br><span>Болгария</span> – известна невероятно красивыми и дурманящими своими запахами плантациями роз, великолепными виноградниками и вкусным домашним вином. Природа этой страны заставляет возвращаться туда снова и снова. Гостеприимство у местных жителей в крови, они всегда подскажут место с красивым видом. Мы, как туристическое агентство в Казахстане, выберем для вас лучшее место для отдыха.<span>Вьетнам</span> – это невероятно красивая страна, которая славится самым дешевым в мире дайвингом. Не только на земле, но и под водой вы увидите небывалую красоту. Тут можно научиться кайтсёрфингу и попробовать известный во всем мире суп фо. Традиционно туроператор в Алматы может отправить вас в Далат, Дананг, Нянчанг, Фантхиет, Фукуок.<br><span>Греция</span> – несмотря на кризис, который очень затронул страну она все равно считается популярной для туристов. Прекрасная древняя архитектура, вкусная еда и гостеприимные греки.<span>Грузия</span> популярна, конечно же, за счет своей аутентичной кухни и вина. Нигде больше вы не выпьете вина, которое было собрано на склонах ближайшей горы. Шикарные виды природы будут сопровождать вас на каждом шагу. Туроператор в Алматы покажет вам всю красоту этой страны.<br><span>Доминикана</span> - пользуется спросом в период народных гуляний, потому что тут происходит, кое-что неземное! Местные жители одевают на себя страшные маски и гуляют днем и ночью. С каждого уголка играет заводная сальса и доносятся звуки заводных танцев. В общем, отдых для любителей повеселиться. Египет, наполненный древними мифами, тут масса достопримечательностей. Красное море – удивительно прозрачное и чистое знаменито своими рифами и возможностью заняться дайвингом. Турагентство в Алматы организовывает поездки к лучшим курортам.<br><span>Индия</span> – это феноменальное место, в котором соединяются технологии, красота, природа и традиции. Очень много прекрасных курортов находятся на территории Индии. Тут вы сможете познакомиться с национальной кухней и прочувствовать гармонию во всем, что вас окружает. Турагентство в Алматы сделает ваше путешествие незабываемым на всю жизнь.<span>Китай</span> – ассоциируется в первую очередь с Пекином, который удивляет своими фантастическими небоскребами. Китайская стена, известное всем восьмое чудо света, тоже входит в туристическую программу. По запросу «турфирма онлайн» вы сможете найти лучшие предложения по отдыху.<br><span>Куба</span> – это рай для любителей кофе, рома и сигар. Приезжать в эту страну нужно с хорошим, зажигательным настроением. Улыбчивые местные, приятная погода и вкусный кофе. Что еще нужно для счастья?<br><span>Малайзия</span> – волшебное место, с таким же волшебным климатом. Потому что, 2/3 территории занимают влажные тропические леса. Природа тут поражает своим разнообразием и разноцветностью. Туристические компании готовы погрузить вас в мир зелени и отдыха, но только турфирма Chemodan сможет добавить в поездку хорошее настроение!<br><span>Мальдивы</span> – самые популярные острова. Тут нет шумного мегаполиса, только вы, море, солнце и пляж. Тут вы сможете почувствовать себя счастливым человеком. Только волны прибоя, никаких криков: «Пахлава! Медовая пахлава!». Тут все время воспринимается спокойно и медленно. Турагенство Казахстан так же предлагает такие путевки<br><span>ОАЭ</span> - просто потрясает своими футуристическими видами, такие небоскребы и архитектуру вы не увидите больше нигде. Туркомпании в Казахстане смогут обеспечить вам хороший шопинг и подобрать нужные даты. Дубай славится своими распродажами. Тут все дышит современностью и кажется, будто вы попали в будущее.<br><span>Таиланд</span> – это в первую очередь еда и прекрасные курорты, с высококачественным обслуживанием. Тут можно поесть местную кухню по низким ценам. Феноменально красивые пляжи заворожат вас с первых минут.<span>Турция</span>, тут конечно, уже были все ваши одноклассники и друзья. Красивые города, вкусная еда и качественное обслуживание – все это есть тут. Вы сможете провести отдых так, как вы хотите. Часто в тур включено все, что необходимо, включая питание и минимальные развлечения.</p></div>
			<div class="a-59"><span style="font-size: inherit;font-weight: bold;">Туристическая фирма в Алматы Chemodan</span></div>
			<div class="a-60"><p>Благодаря постоянному анализу новых предложений и оценке рентабельности мы готовим и составляем для вас лучшие туры. Консультанты смогут рассказать вам о всевозможных предложениях и горячих турах. Если вы готовите поездку заранее мы поможем найти более дешевые билеты и варианты. Сфера отдыха может быть самой разнообразной:<br><br>
			Поездка с семьей и детьми.<br>
			Путешествие для молодоженов или просто пары.<br>
			Туры для компании друзей.<br>
			Эксклюзивные туры.<br>
			Горящие туры.<br><br>
			Конечно же, для каждого из вариантов подбирается отдельная программа. Ведь паре с детьми должно быть уютно в отеле, с возможностью занять детей. А, молодежи больше будет интересно погулять по мейнстримным местам и отдохнуть на вечеринках или фестивалях. Турфирма онлайн выгодна тем, что благодаря удобному рубрикатору вы можете указать необходимые параметры поиска и сразу увидеть доступные результаты. Наша специальная система поиска помогает вовремя узнать время появления дешевых билетов или время скидок в отеле. Поэтому у нас можно будет найти более выгодные предложения.</p>
			</div>
			<div class="a-59"><span style="font-size: inherit;font-weight: bold;">Первая поездка за границу с туристической компанией Чемодан</span></div>
			<div class="a-60"><p>Если вы решили впервые отправиться в отпуск дальше родной страны, но не знаете, что делать мы подскажем! Выбор страны может показаться для вас сложным решением, потому что сначала хочется побывать везде и сразу. Чтобы определиться ознакомьтесь с кратким описанием страны у нас на сайте, тут вы сможете увидеть все достопримечательности и развлечения, которые ждут вас в разных странах. Туристическая фирма в Алматы сможет продумать для вас весь маршрут, который вы хотите пройти. Для того, чтобы окончательно убедиться в выборе страны почитайте отзывы, оставленные нашими клиентами. Туристические компании Алматы лучше всего проявляют себя на этапе подготовки к предстоящей поездке.<br>Когда все документы будут готовы вам останется хорошо провести время в отпуске, получить яркие впечатления и не останавливаться на одном месте. Если у вас есть мечта увидеть мир, то маленькими, но уверенными шагами вы сможете всё! Туристическая фирма в Алматы Chemodan станет вашим надежным союзником в этом деле. Присоединяйтесь к туркомпании в Казахстане и становитесь счастливыми!</p></div>
				</div>
				</div>
				
			</div>
		</div>
		
	</div>
</div>