<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('ssettings', 'Site Settings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-settings-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'phone1',
            'phone2',
//            'info:ntext',
            'whatsapp',
            //'instagram',
            //'telegram',
            'address1',
            //'address1_url:url',
            'address2',
            //'address2_url:url',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{update}'],
        ],
    ]); ?>
</div>
