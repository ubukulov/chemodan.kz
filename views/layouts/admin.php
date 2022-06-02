<?php

use yii\helpers\Html;
use app\assets\MainAsset;
use app\components\CurrencyWidget;
//MainAsset::register($this);

$from_country_list = '<div class="a-173" id="to_all_list" onselectstart="return false;">
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="-">Выберите страну</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="2">Турция</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="23">ОАЭ</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="3">Китай</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="4">Египет</div>
<div class="a-174" onclick="return page.slCountryTo(this)" data-id="5">Тайланд</div>
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

$from_city = '<div class="a-173" id="city_all_list" onselectstart="return false;">
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
	<base href="http://chemodan.kz/">

	<meta name="yandex-verification" content="2bc19f23cd3dc294">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>


    <link rel="shortcut icon" href="/web/img/favicon.ico">

    <script type="text/javascript" src="https://cdn.envybox.io/widget/cbk.js?wcb_code=4f427b7c0077876b344ccf77c61031e9" charset="UTF-8" async=""></script>
    <script src="/web/assets/b69aee4a/jquery.js"></script>
    <script src="/web/js/jquery-ui.js"></script>
    <script src="/web/assets/25a493ae/yii.js"></script>
    <script src="/web/js/script.js"></script>
    <link href="/web/css/jquery-ui.css" rel="stylesheet">
    <link href="/web/assets/39dcf06e/css/bootstrap.css" rel="stylesheet">
    <link href="/web/css/index.css" rel="stylesheet">
    <link href="/web/css/1100.css" rel="stylesheet">
    <link href="/web/css/1024.css" rel="stylesheet">
    <link href="/web/css/768.css" rel="stylesheet">
    <link href="/web/css/425.css" rel="stylesheet">
    <?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body style="background-color: rgb(250,250,250);">
	<div class="a-301">
		<div class="a-302"><div class="a-303"></div></div>
		<a href="/admin"><div class="a-302"><div class="a-314"></div></div></a>
		<a href="/admin/news"><div class="a-302"><div class="a-304"><div class="a-305"></div></div></div></a>
		<a href="/admin/countries"><div class="a-302"><div class="a-306"><div class="a-307"></div><div class="a-308"></div></div></div></a>
		<a href="/admin/tours"><div class="a-302"><div class="a-309"><div class="a-310"></div></div></div></a>
		<a href="/admin/links"><div class="a-302"><div class="a-311"><div class="a-312"></div></div></div></a>
		<a href="/admin/email"><div class="a-302"><div class="a-313"></div></div></a>
	</div>

<div class="a-315"><?= $content ?></div>

<?php $this->endBody() ?>
	
</body>
</html>
<?php $this->endPage() ?>