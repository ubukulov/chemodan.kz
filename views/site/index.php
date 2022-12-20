<?php
$this->registerMetaTag(['name' => 'yandex-verification', 'content' => '2bc19f23cd3dc294']);
$this->registerMetaTag(['name' => 'keywords', 'content' => ' - ']);
$this->registerMetaTag(['name' => 'description', 'content' => ' - Турагенство в Алматы Chemodan.kz предлагает широкий выбор туров по самым низким ценам. Заходите и выбирайте тур подходящий для вас!']);
$this->registerMetaTag(['name' => 'robots', 'content' => 'index, follow']);
$this->registerMetaTag(['name' => 'autor', 'content' => '']);
$this->registerMetaTag(['name' => 'copyright', 'content' => '']);
$this->registerMetaTag(['property' => 'og:locale', 'content' => 'ru_RU']);
$this->registerMetaTag(['property' => 'og:type', 'content' => 'article']);
$this->registerMetaTag(['property' => 'og:title', 'content' => 'Турфирма Chemodan в Казахстане']);
$this->registerMetaTag(['property' => 'og:description', 'content' => 'Турагенство в Алматы Chemodan.kz предлагает широкий выбор туров по самым низким ценам. Заходите и выбирайте тур подходящий для вас!']);
$this->registerMetaTag(['property' => 'og:image', 'content' => 'http://chemodan.kz/web/images/logo_ch.png']);
$this->registerMetaTag(['property' => 'og:url', 'content' => 'http://chemodan.kz/']);
$this->registerMetaTag(['property' => 'og:site_name', 'content' => 'Турфирма Chemodan в Казахстане']);

$this->title = 'Туристическое агентство в Алматы - Турфирма Chemodan в Казахстане';

$detect = new Mobile_Detect;
$settings = $this->params['settings'];
?>

<div class="slider slider1">
    <div><div class="im1 img-1"></div><div class="im2 img-1-1"></div><div class="im3 img-2-1"></div></div>
    <div><div class="im1 img-2"></div><div class="im2 img-1-2"></div><div class="im3 img-2-2"></div></div>
    <div><div class="im1 img-3"></div><div class="im2 img-1-3"></div><div class="im3 img-2-3"></div></div>
    <div><div class="im1 img-4"></div><div class="im2 img-1-4"></div><div class="im3 img-2-4"></div></div>
    <div><div class="im1 img-5"></div><div class="im2 img-1-5"></div><div class="im3 img-2-5"></div></div>
    <div><div class="im1 img-6"></div><div class="im2 img-1-6"></div><div class="im3 img-2-6"></div></div>

</div>

<div class="a-1" style="height: 0px;"></div>

<div class="hcb">
    <a href="https://sb.homecredit.kz/instagram/onlinezayavka/v2/turagentstvo_chemodan/#/" target="_blank" rel="nofollow" class="banner-block banner-block-wide  home-credit" style="display: block; height: 91px;background: url(/img/hcb_ras.png) center no-repeat #DA0025; background-size: auto 91px">
        <div class="container"></div>
    </a>
</div>

<div class="a-440" onclick="return page.requestClient();">Подберите мне тур</div>

<div class="a-39" style="padding: 0px 100px;">
    <div style="margin-top: 20px;" class="tv-search-form tv-moduleid-9955275"></div>
    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
</div>

<div class="a-39" style="overflow: inherit; padding: 0px 100px;">
    <div class="a-40"><span>Горящие предложение</span></div>
    <div class="tv-hot-tours tv-moduleid-9954835"></div>
    <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
</div>

<div class="a-4">
    <div class="a-6">

        <?php //include (dirname(__FILE__) . '\../partials/youtube.php')?>

        <?php include(dirname(__FILE__) . '\../partials/advantages.php') ?>

        <?php include(dirname(__FILE__) . '\../partials/reviews.php') ?>

        <?php include(dirname(__FILE__) . '\../partials/offices.php') ?>

        <?php include(dirname(__FILE__) . '\../partials/partners.php') ?>


        <div class="a-39">
            <div class="a-261">
                <div class="a-58"><h1 style="font-size: inherit;font-weight: bold;">Туристическое агенство в казахстане</h1></div>
                <div>
                    <?=$settings->info;?>
                </div>
            </div>

        </div>
    </div>
</div>
</div>