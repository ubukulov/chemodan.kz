<?php
use app\components\ListCommentWidget;

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'Description', 'content' => 'Все отзывы о нас | Лучшие  туры ✈ турагентства Chemodan.']);
$this->title = 'Отзывы - Турфирма Chemodan в Казахстане';

$review_count = 211;//$db->createCommand('SELECT COUNT(id) FROM comments')->execute();
//$review_count = $review_count;
?>
<div class="a-86a">
	<h1 class="a-108">Все <?php echo $review_count; ?> отзывов о нас!</h1>
	<div class="a-469" onclick="return page.leaveComment(this);">Оставить отзыв</div>
	<div class="a-115"><?php echo ListCommentWidget::widget(); ?></div>
</div>