<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('partners', 'Partners');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="partner-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('partners', 'Create Partner'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'image',
                'format' => 'raw',
                'value' => function ($model) {
                    if (!is_null($model->image))
                        return '<img src="'.Yii::$app->homeUrl. '/uploads/partners/'.$model->image.'" width="80px" height="auto">'; else return 'no image';
                },
            ],
            [
                'attribute' => 'publish',
                'value' => function($data){
                    return ($data->publish == 1) ? 'Да' : 'Нет';
                }
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],
        ],
    ]); ?>
</div>
