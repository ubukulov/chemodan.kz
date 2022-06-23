<?php
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'Description', 'content' => 'ОФИСЫ И ПРЕДСТАВИТЕЛЬСТВА НАШЕЙ КОМПАНИИ | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Контакты - Турфирма Chemodan в Казахстане';
?>
<div class="a-86a">
    <h1 class="a-101">ОФИСЫ И ПРЕДСТАВИТЕЛЬСТВА НАШЕЙ КОМПАНИИ</h1>
    <div class="a-102a">

        <?php foreach($offices as $office) :?>
        <div class="a-102">
            <div class="a-103" style="background-image: url(<?=$office->getImage();?>);"></div>
            <div class="a-104"><?=$office->title;?></div>
            <div class="a-105"><?=$office->address;?></div>
            <div class="a-105" style="margin-top: 5px;">
                <?php
                $arrPhones = explode(',', $office->phones);
                ?>
                <?php foreach($arrPhones as $arrPhone) :?>
                    <p><i style="color: #ccc; margin-right: 10px;" class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?=trim($arrPhone);?>"><?=trim($arrPhone);?></a></p>
                <?php endforeach; ?>
            </div>
            <div class="a-106"><button class="a-107" onclick="return page.viewMap(this);" data-url='<?=$office->map_url;?>'>Показать на карте</button></div>
        </div>
        <?php endforeach; ?>

    </div>

</div>