<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('reviews', 'Comments');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            //'email:email',
            [
                'attribute' => 'email',
                'format' => 'raw',
                'label' => 'Email/Телефон',
            ],
            'comment:ntext',
            [
                'attribute' => 'ss',
                'format' =>  'raw',
                'label' => Yii::t('reviews', 'Ss'),
                'value' => function($model){
                    return ($model->ss == '0') ? 'Да' : 'Нет';
                }
            ],

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],
        ],
    ]); ?>
</div>
