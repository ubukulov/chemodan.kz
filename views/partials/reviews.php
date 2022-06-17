<?php
use app\components\CommentWidget;
?>
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