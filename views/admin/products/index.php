<?php

use yii\grid\GridView;
use yii\widgets\LinkPager;
use yii\helpers\{Url, Html};
use Itstructure\MFUploader\Module as MFUModule;
use app\models\ProductSearch;

/* @var $searchModel ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $this Itstructure\AdminModule\components\AdminView */

$this->title = Yii::t('products', 'Products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <?php  echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('products', 'Create product'), [
            $this->params['urlPrefix'].'create'
        ], [
            'class' => 'btn btn-success'
        ]) ?>
    </p>

    <?php echo LinkPager::widget(['pagination' => $dataProvider->getPagination()]) ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [

            'id',
            'thumbnail' => [
                'label' => MFUModule::t('main', 'Thumbnail'),
                'value' => function($data) {
                    /* @var $data ProductSearch */
                    $defaultThumbImage = $data->getDefaultThumbImage();
                    return !empty($defaultThumbImage) ? Html::a($defaultThumbImage, Url::to([
                        $this->params['urlPrefix'].'view',
                        'id' => $data->id
                    ])) : '';
                },
                'format' => 'raw',
            ],
            'icon' => [
                'label' => Yii::t('app', 'Icon'),
                'value' => function($searchModel) {
                    /* @var $searchModel ProductSearch */
                    return Html::a(
                        Html::tag('i', '', ['class' => empty($searchModel->icon) ? 'fa fa-file fa-2x' : $searchModel->icon]),
                        Url::to([$this->params['urlPrefix'].'view', 'id' => $searchModel->id])
                    );
                },
                'format' => 'raw',
            ],
            'title' => [
                'label' => Yii::t('app', 'Title'),
                'value' => function($searchModel) {
                    /* @var $searchModel ProductSearch */
                    return Html::a(
                        Html::encode($searchModel->title),
                        Url::to([$this->params['urlPrefix'].'view', 'id' => $searchModel->id])
                    );
                },
                'format' => 'raw',
            ],
            'price' => [
                'label' => Yii::t('products', 'Price'),
                'value' => function($searchModel) {
                    /* @var $searchModel ProductSearch */
                    return $searchModel->price;
                },
                'format' => 'raw',
            ],
            'description' => [
                'label' => Yii::t('app', 'Description'),
                'value' => function($searchModel) {
                    /* @var $searchModel ProductSearch */
                    return $searchModel->description;
                },
                'format' => 'raw',
            ],
            'category' => [
                'label' => Yii::t('products', 'Parent category'),
                'value' => function ($searchModel) {
                    /* @var $searchModel app\models\ProductSearch */
                    return null === $searchModel->category ? '' : Html::a(
                        $searchModel->category->title,
                        Url::to(['/admin/categories/view', 'id' => $searchModel->category->id]),
                        [
                            'target' => '_blank'
                        ]
                    );
                },
                'format' => 'raw',
            ],
            [
                'attribute' => 'created_at',
                'format' =>  ['date', 'dd.MM.Y HH:mm:ss'],
                'label' => Yii::t('app', 'Created date'),
            ],
            [
                'attribute' => 'updated_at',
                'format' =>  ['date', 'dd.MM.Y HH:mm:ss'],
                'label' => Yii::t('app', 'Updated date'),
            ],
            'active' => [
                'label' => Yii::t('app', 'Active status'),
                'value' => function($searchModel) {
                    /* @var $searchModel app\models\Product */
                    if ($searchModel->active == 1){
                        return '<i class="fa fa-check-circle text-success"> ' . Yii::t('app', 'Active') . '</i>';
                    } else {
                        return '<i class="fa fa-times text-danger"> ' . Yii::t('app', 'Inactive') . '</i>';
                    }
                },
                'format' => 'raw',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => Yii::t('app', 'Actions'),
                'template' => '{view} {update} {delete}',
                'urlCreator'=>function($action, $model, $key, $index){
                    return Url::to([
                        $this->params['urlPrefix'].$action,
                        'id' => $model->id
                    ]);
                }
            ],
        ],
    ]); ?>
</div>
