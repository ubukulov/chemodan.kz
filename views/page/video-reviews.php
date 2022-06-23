<?php
use app\models\Menu;

$this->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
$this->registerMetaTag(['name' => 'Description', 'content' => $model->description]);
$this->title = $model->seo_title;

/* @var Menu $model */
?>
<div class="a-86a">
    <?php include(dirname(__FILE__) . '\../partials/youtube.php') ?>
</div>