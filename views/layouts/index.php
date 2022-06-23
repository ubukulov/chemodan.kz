<?php
use app\components\MyWidget;
use yii\helpers\Html;
use app\assets\MainAsset;
use app\components\CurrencyWidget;
//MainAsset::register($this);
//$geoPlugin_array = unserialize( file_get_contents('http://www.geoplugin.net/php.gp?ip=' . $_SERVER['REMOTE_ADDR']) );
// Подключение и инициализация класса
//require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
/*
if($geoPlugin_array['geoplugin_city'] == "Almaty") {
  $title = 'Алматы';
} else {
  $title = 'Нур-Султан';
}*/
$title = 'Алматы';
$settings = $this->params['settings'];

$from_country_list = '<div class="a-173" id="to_all_list">
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="-">Выберите страну</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="2">Турция</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="23">ОАЭ</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="3">Китай</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="4">Египет</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="5">Таиланд</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="12">Израиль</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="15">Испания</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="16">Италия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="6">Индия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="30">Греция</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="18">Мальдивы</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="32">Куба</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="21">Шри Ланка</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="8">Грузия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="31">Кипр</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="6">Тунис</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="11">Доминикана</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="16">Австрия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="7">Азербайджан</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="27">Андорра</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="10">Венгрия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="14">Индонезия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="37">Португалия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="23">Кыргызстан</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="17">Малайзия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="1">Россия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="20">Словения</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="25">Украина</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="22">Франция</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="9">Чехия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="38">Сейшелы</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="33">Латвия</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="34">Литва</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="28">Беларусь</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="29">Болгария</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="35">Маврикии</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="36">Мексика</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="39">Эстония</div>
</div>';

$from_city = '<div class="a-173" id="city_all_list">
<div class="a-174" onclick="return page.slCityTo(this)" data-id="-" data-country="-">Выберите город</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="0" data-country="0">Алматы</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="2" data-country="0">Астана</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="4" data-country="0">Караганда</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="6" data-country="0">Актобе</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="8" data-country="0">Актау</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="10" data-country="0">Уральск</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="1" data-country="0">Усть - Каменогорск</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="3" data-country="0">Атырау</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="5" data-country="0">Шымкент</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="7" data-country="0">Костанай</div>
<div class="a-174" onclick="return page.slCityTo(this)" data-id="9" data-country="0">Павлодар</div>
</div>';

?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KQ48SX');</script>
	<!-- End Google Tag Manager -->
	
	<style>
		.percent{
			text-align: center !important;
			width: 150px !important;
			line-height: 150px !important;
			border-radius: 100% !important;
			margin: 20px 10px !important;
			display: inline-block !important;
			vertical-align: top !important;
			position: absolute !important;
			right: 5% !important;
			top: 1% !important;
			color: #fff !important;
			font-weight: bold !important;
			font-size: 20px !important;
			z-index: 9999;
		}
		.percent_mobile {
			text-align: center !important;
			width: 150px !important;
			line-height: 55px !important;
			border-radius: 100% !important;
			margin: 0px 10px !important;
			display: inline-block !important;
			vertical-align: top !important;
			position: fixed !important;
			right: 0;
			top: 0;
			color: #fff !important;
			font-weight: bold !important;
			font-size: 20px !important;
			z-index: 9999;
		}
	</style>
	
    <script src="/js/transbase.js"></script>
    <script>__jivoConfigOnLoad({"widget_id":"XuV8thGQa2","site_id":87584,"widget_color":"#4CAF50","widget_font_color":"light","widget_padding":"100","widget_height":"33","widget_orientation":"bottom","widget_mobile_orientation":"right","font_size":"16","font_family":"Verdana","font_type":"normal","locale":"ru_RU","show_rate_form":1,"hide_ad":1,"secure":0,"contacts_ask":1,"style_string":"jivo_shadow jivo_rounded_corners jivo_gradient jivo_3d_effect jivo_border","chat_mode":0?"online":"offline","geoip":"KZ;02;Almaty","botmode":false,"options":888,"hide_offline":0,"build_number":"1542007393","avatar_url":"\/\/files.jivosite.com","online_widget_label":"\u041d\u0430\u043f\u0438\u0448\u0438\u0442\u0435 \u043d\u0430\u043c, \u043c\u044b \u043e\u043d\u043b\u0430\u0439\u043d!","offline_widget_label":"\u041e\u0442\u043f\u0440\u0430\u0432\u044c\u0442\u0435 \u043d\u0430\u043c \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435","offline_form_text":"\u041e\u0441\u0442\u0430\u0432\u044c\u0442\u0435 \u0441\u0432\u043e\u0435 \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435 \u0432 \u044d\u0442\u043e\u0439 \u0444\u043e\u0440\u043c\u0435, \u043c\u044b \u043f\u043e\u043b\u0443\u0447\u0438\u043c \u0435\u0433\u043e \u043d\u0430 e-mail \u0438 \u043e\u0431\u044f\u0437\u0430\u0442\u0435\u043b\u044c\u043d\u043e \u043e\u0442\u0432\u0435\u0442\u0438\u043c!","bubble_color":"blue","callback_btn_color":"#44BB6E","power_button_color":"#009688","base_url":"\/\/code.jivosite.com","static_host":"cdn.jivosite.com","comet":{"host":"node146.jivosite.com"},"rules":[{"name":"\u041f\u0440\u0438\u0433\u043b\u0430\u0448\u0435\u043d\u0438\u0435 \u043d\u0430 \u0432\u0441\u0435\u0445 \u0441\u0442\u0440\u0430\u043d\u0438\u0446\u0430\u0445","type":"all","enabled":true,"conditions":[{"condition":"online","value":true},{"condition":"page_url","comparator":"contain","value":"\/"},{"condition":"time_on_page","comparator":"greater_equal","value":40},{"condition":"time_after_close","comparator":"greater_equal","value":300},{"condition":"time_on_site","comparator":"greater_equal","value":30}],"commands":[{"command":"proactive","params":{"message":"\u0417\u0434\u0440\u0430\u0432\u0441\u0442\u0432\u0443\u0439\u0442\u0435! \u0425\u043e\u0442\u0438\u0442\u0435 \u043f\u0440\u043e\u0432\u0435\u0441\u0442\u0438 \u0441\u0430\u043c\u044b\u0439 \u043b\u0443\u0447\u0448\u0438\u0439 \u043e\u0442\u0434\u044b\u0445? \u0422\u043e\u0433\u0434\u0430 \u044f \u0441 \u0440\u0430\u0434\u043e\u0441\u0442\u044c\u044e \u043f\u043e\u043c\u043e\u0433\u0443 \u0412\u0430\u043c \u043f\u043e\u0434\u043e\u0431\u0440\u0430\u0442\u044c \u0442\u0443\u0440!)"}}]},{"conditions":[{"condition":"time_on_page","comparator":"greater","value":"10"},{"condition":"time_on_site","comparator":"greater","value":"120"},{"condition":"time_after_close","comparator":"greater","value":"120"},{"condition":"time_after_invitation","comparator":"greater","value":"60"}],"commands":[{"command":"show_callform","params":{"once_aday":true,"title":"\u041d\u0443\u0436\u043d\u0430 \u043f\u043e\u043c\u043e\u0449\u044c? <br>\u041c\u044b \u043f\u0435\u0440\u0435\u0437\u0432\u043e\u043d\u0438\u043c \u0447\u0435\u0440\u0435\u0437 <span style='color: #40cd72'>27<\/span> \u0441\u0435\u043a\u0443\u043d\u0434!"}}],"name":"\u0417\u0430\u043a\u0430\u0437 \u0437\u0432\u043e\u043d\u043a\u0430 \u2013 \u043f\u043e \u0442\u0430\u0439\u043c\u0435\u0440\u0443","enabled":true,"type":"all"}],"typing_insight":1,"cp_tracker_id":28589,"cp_tracker_url":"\/\/tracker.cartprotector.com\/cartprotector.js","contacts_settings":{"name":{"show":true,"required":true},"email":{"show":true,"required":true},"phone":{"show":true,"required":true}},"new_visitors_insight":1,"vi_host":"chat5-1.jivosite.com","joint":{"vb":{"botname":"www.chemodan.kz"}},"social_responce":1});</script>

    <?php if(!$detect->isMobile()) :?>
		<script src="//code.jivosite.com/script/geo-widget/XuV8thGQa2"></script>
	<?php endif; ?>

    <script src="https://openstat.net/s/2271062.js"></script>
	<script src="https://openstat.net/cnt.js"></script>
    <link rel="stylesheet" href="https://cdn.envybox.io/widget/cbk.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/slick.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slick-theme.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
	<meta name="yandex-verification" content="2bc19f23cd3dc294">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="Сеть Турагентств Чемодан"/>
    <meta property="og:description" content="Сеть Турагентств Чемодан. горящие туры"/>
    <meta property="og:image" content="https://chemodan.kz/img/12.png"/>
    <meta property="og:url" content="https://chemodan.kz/"/>
    <meta property="og:site_name" content="Сеть Турагентств Чемодан"/>

    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>


    <link rel="shortcut icon" href="/img/favicon.ico">

    <script src="https://cdn.envybox.io/widget/cbk.js?wcb_code=4f427b7c0077876b344ccf77c61031e9"></script>
    <script src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/950352607/?random=1540983917023&amp;cv=9&amp;fst=1540983917023&amp;num=1&amp;guid=ON&amp;resp=GooglemKTybQhCsO&amp;eid=659255991&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=2&amp;u_tz=360&amp;u_java=false&amp;u_nplug=3&amp;u_nmime=4&amp;gtm=2wgam0&amp;sendb=1&amp;frm=0&amp;url=http%3A%2F%2Ftest.chemodan.kz%2F&amp;tiba=%D0%A2%D1%83%D1%80%D0%B8%D1%81%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5%20%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE%20%D0%B2%20%D0%90%D0%BB%D0%BC%D0%B0%D1%82%D1%8B%20-%20%D0%A2%D1%83%D1%80%D1%84%D0%B8%D1%80%D0%BC%D0%B0%20Chemodan%20&amp;async=1&amp;rfmt=3&amp;fmt=4"></script>
    <script src="/assets/b69aee4a/jquery.js"></script>
    <script src="/js/jquery-ui.js"></script>
    <script src="/assets/25a493ae/yii.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="/js/slick.min.js"></script>


    <link href="/css/jquery-ui.css" rel="stylesheet">
    <link href="/assets/39dcf06e/css/bootstrap.css" rel="stylesheet">
    <link href="/css/index.css" rel="stylesheet">
    <link href="/css/1100.css" rel="stylesheet">
    <link href="/css/1024.css" rel="stylesheet">
    <link href="/css/768.css" rel="stylesheet">
    <link href="/css/425.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <?php $this->head() ?>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Website",
            "url": "https://chemodan.kz/"
        }
	</script>
</head>
<?php $this->beginBody() ?>
<body>
<div id="hidd" style="display: none;"><?php echo MyWidget::widget();?></div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQ48SX"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="a-346">График работы 31 декабря с 11:00 до 15:00</div>
<div class="a-274"><div class="a-275" onclick="return page.scrollTop(this)"></div></div>
<div class="cloud-back">
    <div id="background-wrap">
        <div class="x1"><div class="cloud"></div></div>
        <div class="x2"><div class="cloud"></div></div>
        <div class="x3"><div class="cloud"></div></div>
        <div class="x4"><div class="cloud"></div></div>
        <div class="x5"><div class="cloud"></div></div>
    </div>
</div>
	<?php if($detect->isMobile()) :?>
		<div class="percent_mobile">
			<img style="width: 40px;" src="/img/10year.png"/>
		</div>
	<?php else :?>
		<div class="percent">
			<img style="width: 150px;" src="/img/10year.png"/>
		</div>
	<?php endif; ?>
	

<div class="header">
    <div class="mob-h-1">
        <div class="mob-h-2" onclick="return page.menuShow(this);">
            <div class="mob-h-3"></div>
            <div class="a-164" onclick="return page.stop(event);">
                <div class="a-165">
                    <div class="a-166 a-166a" onclick="return page.menuSlide(this);" data-id="0">Горящие туры</div>
                    <div class="a-166 a-166a" onclick="return page.menuSlide(this);" data-id="1">Открыть агентство</div>
                    <a href="/reviews" onclick="return page.link(this);" class="a-277"><div class="a-166">Отзывы</div></a>
                    <a href="/contacts" onclick="return page.link(this);" class="a-277"><div class="a-166">Контакты</div></a>
                    <!-- <div class="a-166">Заявка на подбор тура</div> -->
                    <a href="/bonuscard" onclick="return page.link(this);" class="a-277"><div class="a-166">Бонусная карта</div></a>
                    <!-- <div class="a-166">Книга жалоб</div> -->
                    <div class="a-286"><a href="tel:+7(700)3468220">+7 (700) 346 82 20</a></div>
                    <div class="a-286"><a href="tel:+7(727)3468220">+7 (727) 346 82 20</a></div>
                    <div class="a-286"><a href="mailto:info@chemodan.kz">info@chemodan.kz</a></div>
                </div>
                <div class="a-167">
                    <div class="a-168" data-id="0">
                        <div class="a-166b" onclick="return page.menuBack();">Назад</div>
                        <a href="/tours" onclick="return page.link(this);"><div class="a-166">Все горящие туры</div></a>
                        <a href="/hot" onclick="return page.link(this);"><div class="a-166">Поиск горящих туров</div></a>
                        <a href="/tours/turkey" onclick="return page.link(this);"><div class="a-166">Горящие туры в Турцию</div></a>
                        <a style='display:none' href="/tours/greece" onclick="return page.link(this);"><div class="a-166">Горящие туры в Грецию</div></a>
                        <a href="/tours/uae" onclick="return page.link(this);"><div class="a-166">Горящие туры в ОАЭ</div></a>
                        <a href="/tours/egypt" onclick="return page.link(this);"><div class="a-166">Горящие туры в Египет</div></a>
                        <a href="/tours/thailand" onclick="return page.link(this);"><div class="a-166">Горящие туры в Таиланд</div></a>
                        <a href="/tours/dominicana" onclick="return page.link(this);"><div class="a-166">Горящие туры в Доминикану</div></a>
                    </div>
                    <div class="a-168" data-id="1">
                        <div class="a-166b" onclick="return page.menuBack();">Назад</div>
                        <a href="/franchise/open" onclick="return page.link(this);"><div class="a-166">Открыть офис</div></a>
                        <a href="/franchise" onclick="return page.link(this);"><div class="a-166">Условия франчайзинга</div></a>
                        <a href="https://chmd-afina.kz/" onclick="return page.link(this);"><div class="a-166">Вход для франчайзинга</div></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mob-h-4"><div class="a-288">Чемодан</div><div class="a-287">Сеть туристических агентств</div></div>
        <a href="/"><div class="mob-h-5"></div></a>
    </div>

    <div class="h-1">
        
        <a href="/"><div class="h-2"></div></a>
        <a href="/"><button class="h-3">Чемодан<div class="h-9">Сеть туристических агентств</div></button></a>


        <div class="h-10">
            <a id="main_whatsapp" href="<?=$settings->whatsapp;?>" target="_blank" rel="nofollow"><div class="h-11"></div></a>
            <a id="main_instagram" href="<?=$settings->instagram;?>" target="_blank" rel="nofollow"><div class="h-12"></div></a>
            <a id="main_telegram" href="<?=$settings->telegram;?>" target="_blank" rel="nofollow"><div class="h-13"></div></a>
            <a href="mailto:info@chemodan.kz"><div class="a-259">info@chemodan.kz</div></a>
        </div>
        <!--<a href="/franchise/open" target="_blank"><button class="a-276" onclick="return page.opendFran(this);">Открыть агентство</button></a>-->
        
        <a href="/payment/paybox">
            <button class="a-276" onclick="return page.opendFran(this);">Оплатить онлайн</button>
        </a>
        <!--<a href="/credit/homecreditbank" target="_blank">
            <button class="a-276 hcbtn">Купить с рассрочкой</button>
        </a>-->
        

        <div class="h-8"><div><a id="phone_number2" href="tel:<?=$settings->phone2;?>" class="no-link"><?=$settings->phone2;?></a></div><div class="a-260" onclick="return page.call();">Заказать звонок</div></div>
        <div class="h-8" style="margin-right: 15px;"><div><a id="phone_number1" href="tel:<?=$settings->phone1;?>" class="no-link"><?=$settings->phone1;?></a></div><div class="a-260" onclick="return page.call();">Заказать звонок</div></div>

        <?php echo CurrencyWidget::widget();?>

        <?php require_once dirname(__FILE__) . "/../partials/menu.php"; ?>

    </div>
</div>

<div class="a-74 a-74a">
    <div class="a-80 invisible" onclick="return page.hideBlock()"></div>
    <div class="a-75 invisible" id="claim">
        <div class="a-76"><input type="text" placeholder="Ваше имя" class="a-77"></div>
        <div class="a-76"><input type="text" placeholder="Ваше email" class="a-77"></div>
        <div class="a-76"><textarea class="a-78" placeholder="Введите текст"></textarea></div>
        <div class="a-76"><button class="a-79" onclick="return page.saveClaim(this);">Оставить жалобу</button></div>
    </div>
    <div class="a-75 invisible" id="get-tour">
        <div class="a-81a">
            <div class="a-82">Класс отеля:</div>
            <div class="a-82a"><div class="a-82b" onclick="return page.viewStarList();"><div class="a-82c" id="hotel_stars" data-id="3-5">от 3* до 5*</div></div>
            <div class="a-173" id="star_list_all">
                <div class="a-174" onclick="return page.starChange(this);" data-id="3-5">от 3* до 5*</div>
                <div class="a-174" onclick="return page.starChange(this);" data-id="5">5*</div>
                <div class="a-174" onclick="return page.starChange(this);" data-id="4">4*</div>
                <div class="a-174" onclick="return page.starChange(this);" data-id="3">3*</div>
            </div>
            </div>
            <div class="a-82">Цена тура:</div>
            <div class="a-82a"><div class="a-82b" onclick="return page.viewPriceList();"><div class="a-82c" id="price_amount" data-id="500">500$</div></div><div class="a-173" id="price_list_all">
                <div class="a-174" onclick="return page.priceChange(this);" data-id="500">500$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="1000">1000$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="1500">1500$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="2000">2000$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="3000">3000$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="5000">5000$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="10000">10000$</div>
                <div class="a-174" onclick="return page.priceChange(this);" data-id="100000">100000$</div>
            </div></div>
            <div class="a-82">Ваш контакный номер:</div>
            <div class="a-82a"><input type="text" placeholder="+7" class="a-184" id="tour-phone"></div>
            <div class="a-82">Ваш контакный email:</div>
            <div class="a-82a"><input type="text" class="a-184" id="tour-email"></div>
            <div class="a-179" onclick="return page.getTours(this);" data-id="0">
                <div class="a-180"><div class="a-181"></div></div>
                <div class="a-182">Получать горящие туры</div>
            </div>
            <div class="a-82a">
                <button class="a-183" onclick="return page.backStep();">Назад</button>
                <button class="a-183a" onclick="return page.tourFinish();">Шаг (2/2) Завершить</button>
            </div>
        </div>
        <div class="a-81">
            <div class="a-82">Заявка на подбор тура в:</div>
            <div class="a-82a"><div class="a-82b" onclick="return page.toList();"><div class="a-82c" id="to_country_list" data-id="-">Выберите страну</div></div><?php echo $from_country_list; ?></div>
            <div class="a-82 a-82-0">Вылет из города:</div>
            <div class="a-82a"><div class="a-82b" onclick="return page.cityList();"><div class="a-82c" id="from_city_list" data-id="-">Выберите город</div></div><?php echo $from_city;?></div>
            <div class="a-82 a-82-0">Дата вылета:</div>
            <div class="a-82a"><div class="a-82b"><input type="text" value="<?php echo date('d.m.Y'); ?>" class="a-176" readonly="true" id="tour_date" onclick="return page.dateList(this);"></div></div>
            <div class="a-82 a-82-0">Продолжительность дней:</div>
            <!--<input type="text" class="a-82g" value="8" id="start_day">-->
            <!--<input type="text" class="a-82g" value="11" id="end_day">-->
            <div class="a-82a"><div class="a-82h"><div class="a-82d"><div class="a-82e">от</div><div class="a-82f"><select class="a-82g" id="start_day"><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8" selected>8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option></select></div></div></div><div class="a-82h"><div class="a-82d"><div class="a-82e">До</div><div class="a-82f"><select class="a-82g" id="end_day"><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11" selected>11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option></select></div></div></div></div>
            <div class="a-82 a-82-0">Количество взрослых и детей:</div>
            <div class="a-82a">
                <div class="a-169"><div class="a-170" onclick="return page.viewAdult(this);"><div class="a-171" dataid="2" id="adult_list">2 Взросл.</div></div><div class="a-177" id="adult_all"><div class="a-178" onclick="return page.adultSel(this);" data-id="1">1 Взросл.</div><div class="a-178" onclick="return page.adultSel(this);" data-id="2">2 Взросл.</div></div></div>
                <div class="a-169"><div class="a-170" onclick="return page.viewChild(this);"><div class="a-171" data-id="0" id="child_list">Без детей</div></div><div class="a-177" id="child_all"><div class="a-178" onclick="return page.childSel(this);" data-id="0">Без детей</div><div class="a-178" onclick="return page.childSel(this);" data-id="2">1 Ребенок</div><div class="a-178" onclick="return page.childSel(this);" data-id="2">2 Ребенка</div></div></div>
            </div>
            <div class="a-82a">
                <button class="a-172" onclick="return page.nextStep();">Шаг (1/2) Далее</button>
            </div>
            <?php
//<div class="a-82a"><div class="a-82h"><div class="a-82d"><div class="a-82f"><div class="a-82i">2 взрослых</div></div></div></div><div class="a-82h"><div class="a-82d"><div class="a-82f"><div class="a-82i">Без детей</div></div></div></div></div>
?>
        </div>
    </div>
    <div class="a-43">
        <div class="a-44" onclick="return page.getTour();">Заявка на подбор тура</div>
        <div class="a-44" onclick="return page.claim();">Книга жалоб</div>
    </div>
</div>

<?= $content ?>

    <?php if($detect->isMobile()) :?>
    <div class="whatsapp" style="bottom: 53px; right: 20px; position: fixed;">
        <a href="https://api.whatsapp.com/send?phone=77051857409">
            <img src="/img/whatsapp.png">
        </a>
    </div>
    <?php endif; ?>

<footer>
    <div class="a-61">
        <div class="a-66"></div>
        <div class="a-65">
            <div class="a-67">
                <div class="a-68">Подпишитесь на получение новостей о горящих турах, акциях и спецпредложениях</div>
                <div class="a-69">
                    <div class="a-72">Ваш email адрес</div>
                    <input type="text" class="a-70" oninput="return page.input(this,event);">
                    <button class="a-71" id="main_subscribe_btn" onclick="return page.subscribe(this);">Подписаться</button>
                </div>
            </div>
        </div>
        <div class="a-63">
            <div class="a-62">
                <div class="a-64"><a href="/office/about" class="h-21c"><div class="a-64a">О нас</div></a></div>
                <div class="a-64"><a href="/reviews" class="h-21c"><div class="a-64a">Отзывы</div></a></div>
                <div class="a-64"><a href="/office" class="h-21c"><div class="a-64a">Компания</div></a></div>
                <div class="a-64"><a href="/countries-tours/countries" class="h-21c"><div class="a-64a">Страны</div></a></div>
            </div>
            <div class="a-62">
                <div class="a-64"><a href="/tours" class="h-21c"><div class="a-64a">Горящие туры</div></a></div>
                <div class="a-64"><a href="/countries-tours" class="h-21c"><div class="a-64a">Страны и туры</div></a></div>
                <div class="a-64"><a href="/services" class="h-21c"><div class="a-64a">Услуги</div></a></div>

                <div class="a-64"><a href="/contacts" class="h-21c"><div class="a-64a">Контакты</div></a></div>
            </div>
            <div class="a-62">
                <!--<div class="a-64"><a href="/maps" class="h-21c"><div class="a-64a">Карта сайта</div></a></div>-->
                <div class="a-64"><a href="/office/cloudpayments" class="h-21c"><div class="a-64a">Оплата Банковской картой онлайн</div></a></div>
                <div class="a-64"><a href="/franchise" class="h-21c"><div class="a-64a">Открыть агентство</div></a></div>
                <div class="a-64"><a href="/confidential" class="h-21c"><div class="a-64a">Конфиденциальность</div></a></div>
                <div class="a-64"><a href="/contract_offer" class="h-21c"><div class="a-64a">Договор оферты</div></a></div>
            </div>
        </div>
        <div class="a-248">
            <div class="a-249">
                <div class="a-250"><i class="material-icons">location_on</i></div>
                <div class="a-251" onclick="return page.viewMap(this);" data-url="<?=$settings->address1_url;?>"><?=$settings->address1;?></div>
            </div>
            <div class="a-249">
                <div class="a-250"><i class="material-icons">location_on</i></div>
                <div class="a-251" onclick="return page.viewMap(this);" data-url="<?=$settings->address2_url;?>"><?=$settings->address2;?></div>
            </div>
        </div>
        <!--<div class="a-300"><a href="https://metrika.yandex.ru/stat/?id=29623905&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/29623905/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="29623905" data-lang="ru" /></a></div>-->
        <div class="a-73">© Сеть Турагентств Чемодан - Все права защищены <?php echo date('Y');?></div>
    </div>
</footer>
    <span href="#" id="popup__toggle" data-toggle="modal" data-target="#modal-callback" data-wow-offset="150">
    <div class="circlephone" style="transform-origin: center;"></div>
    <div class="circle-fill" style="transform-origin: center;"></div>
    <div class="img-circle" style="transform-origin: center;">
        <div class="img-circleblock" style="transform-origin: center;"></div>
    </div>
    </span>
<!--<link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/sweetalert.css">
    <link rel="stylesheet" href="/css/callback-left-green.css">
<script src="http://sip.chemodan.kz/callback/bootstrap-sweetalert/sweetalert.js"></script>-->
<!--<script src="http://sip.chemodan.kz/callback/phonemask/jquery.maskedinput.js?f3rfwf"></script>-->
<!--<script src="http://sip.chemodan.kz/callback/callback.js"></script>-->
<!--<script src="/js/callback.js"></script>-->

<?php $this->endBody() ?>
<script type="text/javascript">
  (function(d, w, s) {
    var widgetHash = 'jnpv0z6fqllac0wij5ul', gcw = d.createElement(s); gcw.type = 'text/javascript'; gcw.async = true;
    gcw.src = '//widgets.binotel.com/getcall/widgets/'+ widgetHash +'.js';
    var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(gcw, sn);
  })(document, window, 'script');
</script>

</body>
</html>
<?php $this->endPage() ?>
