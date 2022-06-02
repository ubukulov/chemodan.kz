<?php
use app\components\ResortWidget;


$info = ['title'=>'информация не найдена','body'=>'<div class="a-0-1">Страница не найдена</div>','img'=>''];

if (is_int($resort)) {
	$sql = resortWidget::widget(['id'=>$resort]);
	if ($sql !== '') {
		$arr = json_decode($sql,true);
		$info['title'] = $arr['title'];
		$info['body'] = $arr['body'];
		if ($arr['img'] !== '') {
			foreach ($arr['img'] as $k=>$v) {
				$info['img'] .= '<div class="a-94c"><img src="'.$v.'"></div>';
			}
		}
	}
}

$this->registerMetaTag(['name' => 'keywords', 'content' => $this->title]);
$this->registerMetaTag(['name' => 'Description', 'content' => 'h1 + | Лучшие  туры ✈ по самым низким ценам от туристического агентства в Алматы. ☀ Выбирайте подходящие туры, детали по телефону ☎ +7 (727) 346 84 78']);
$this->title = $info['title'];
?>
<div class="a-86a a-86b">
<h1 class="a-94"><?php echo $info['title'] ?></h1>
<div class="a-94b"><?php echo $info['img']; ?></div>
<div class="a-94d" onclick="return page.requestClient();">Оставить заявку</div>
<div class="a-94a"><?php echo $info['body']; ?></div>
</div>