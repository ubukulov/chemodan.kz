<div class="a-477">
    <div class="a-478">

        <?php foreach($this->params['menus'] as $menu) :?>
            <div class="a-479">

                <?php if(isset($menu['children'])) :?>
                    <a href="/<?=$menu['alias']?>" class="h-21c"><button class="a-480"><?=$menu['title'];?></button></a>

                    <div class="a-481"></div>
                    <div class="a-482">
                        <?php foreach($menu['children'] as $child) :?>
                        <div class="a-483">
                            <a <?php if($menu['alias'] == $child['alias']) :?> href="/<?=$menu['alias']?>" <?php else :?> href="/<?=$menu['alias'] . '/' . $child['alias']?>" <?php endif; ?> class="h-21c"><div class="a-484"><?=$child['title'];?></div></a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php else :?>
                    <a href="/<?=$menu['alias']?>" class="h-21c"><button class="a-480"><?=$menu['title'];?></button></a>
                <?php endif ?>

            </div>

            <?php if($menu['alias'] == 'office') :?>
                <div class="a-479">
                    <a href="/franchise" class="h-21c"><button class="a-480">Открыть агентство</button></a>
                    <div class="a-481"></div>
                    <div class="a-482">
                        <div class="a-483">
                            <a href="/franchise" class="h-21c"><div class="a-484">Условия франчайзинга</div></a>
                        </div>
                        <div class="a-483" style="border-bottom: none;">
                            <a href="https://www.afinadb.kz" target="_blank" class="h-21c"><div class="a-484">Вход для франчайзинга</div></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

        <?php endforeach; ?>

    </div>
</div>