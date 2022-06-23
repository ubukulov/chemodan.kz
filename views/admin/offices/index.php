<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('offices', 'Offices');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="office-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('offices','Create Office'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'address',
            'phones',
            [
                'attribute' => 'publish',
                'value' => function($data){
                    return ($data->publish == 1) ? 'Да' : 'Нет';
                }
            ],
            [
                 'attribute' => 'image',
                 'format' => 'raw',
                 'value' => function ($model) {
                    if (!is_null($model->image))
                      return '<img src="'.Yii::$app->homeUrl. '/uploads/offices/'.$model->image.'" width="50px" height="auto">'; else return 'no image';
                 },
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update} {view}'],
        ],
    ]); ?>
</div>
