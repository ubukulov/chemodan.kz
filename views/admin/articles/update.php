<?php

/* @var $this Itstructure\AdminModule\components\AdminView */
/* @var $model app\models\Article */
/* @var $pages array|\yii\db\ActiveRecord[] */
/* @var $albums Itstructure\MFUploader\models\album\Album[] */
/* @var $images array */

$this->title = Yii::t('articles', 'Update article').': ' . $model->title;
$this->params['breadcrumbs'][] = [
    'label' => Yii::t('articles', 'Articles'),
    'url' => [
        $this->params['urlPrefix'].'index'
    ]
];
$this->params['breadcrumbs'][] = [
    'label' => $model->title,
    'url' => [
        $this->params['urlPrefix'].'view',
        'id' => $model->id
    ]
];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="article-update">

    <?php echo $this->render('_form', [
        'model' => $model,
        'pages' => $pages,
        'albums' => $albums,
        'images' => $images,
        'ownerParams' => [
            'owner' => \app\models\Article::tableName(),
            'ownerId' => $model->getId(),
        ],
    ]) ?>

</div>
