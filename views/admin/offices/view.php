<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Office */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Offices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="office-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'city_id',
            'title',
            'address',
            'phones',
            'image'
        ],
    ]) ?>

    <?php
        if (!is_null($model->image)) {
            echo '<br /><p><img src="'.Yii::$app->homeUrl. '/uploads/offices/'.$model->image.'"></p>';
        }
    ?>

</div>
