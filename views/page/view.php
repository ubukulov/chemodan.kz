<?php
use app\models\Menu;

$this->registerMetaTag(['name' => 'keywords', 'content' => $model->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $model->description]);
$this->title = $model->seo_title;

/* @var Menu $model */

?>
    <div class="a-86a">
        <h1 class="a-97"><?= mb_strtoupper($model->title); ?></h1>

        <?php if($model->id == 3) :?>
            <div class="a-39" style="padding: 0px 100px;">
                <div style="margin-top: 20px;" class="tv-search-form tv-moduleid-9955275"></div>
                <script type="text/javascript" src="//tourvisor.ru/module/init.js"></script>
            </div>
        <?php endif; ?>

        <?php echo $model->content; ?>

        <?php if($model->alias == 'hotels') :?>
            <?php echo include(dirname(__FILE__) . '\../partials/sletat/hotels.php'); ?>
        <?php endif; ?>
    </div>
<?php
use app\components\FormWidget;
if(!empty($model->widget_title)) {
    echo FormWidget::widget(['title' => $model->widget_title, 'id' => $model->alias . "_btn"]);
}
?>