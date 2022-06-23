<div class="a-39">
    <div class="a-40"><span>Наши партнеры</span></div>
    <div class="a-56">
        <?php foreach($partners as $partner) :?>
            <div class="a-57" style="background-color: url(<?=$partner->getImage();?>) no-repeat center;background-size: 130px;"></div>
        <?php endforeach; ?>
    </div>
</div>