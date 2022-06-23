<div class="a-39">
    <div class="a-40"><span>Наши офисы</span></div>
    <div class="a-428">

        <?php foreach($offices as $office) :?>
        <div class="a-429">
            <div class="a-430" style="background-image: url(<?=$office->getImage();?>);"></div>
            <div class="a-431"><?=$office->title;?></div>
            <div class="a-432"><?=$office->address;?></div>
            <div class="a-432">
                <?php
                    $arrPhones = explode(',', $office->phones);
                ?>
                <?php foreach($arrPhones as $arrPhone) :?>
                    <p><i style="color: #ccc; margin-right: 10px;" class="fa fa-phone" aria-hidden="true"></i><a href="tel:<?=trim($arrPhone);?>"><?=trim($arrPhone);?></a></p>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
</div>