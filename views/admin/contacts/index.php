<?php

use yii\grid\GridView;
use yii\helpers\{Url, Html};
use app\models\ContactSearch;

/* @var $searchModel ContactSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $this Itstructure\AdminModule\components\AdminView */

$this->title = Yii::t('contacts', 'Contacts');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contact-index">

    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('contacts', 'Create contact'), [
            $this->params['urlPrefix'].'create'
        ], [
            'class' => 'btn btn-success'
        ]) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [

            'id',
            'title' => [
                'label' => Yii::t('app', 'Title'),
                'value' => function($searchModel) {
                    /* @var $searchModel ContactSearch */
                    return Html::a(
                        Html::encode($searchModel->title),
                        Url::to([$this->params['urlPrefix'].'view', 'id' => $searchModel->id])
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
            'default' => [
                'label' => Yii::t('app', 'Default status'),
                'value' => function($searchModel) {
                    /* @var $searchModel ContactSearch */
                    if ($searchModel->default === 1) {
                        return Html::tag('i', '', [
                            'class' => 'fa fa-check-circle',
                        ]);
                    }

                    return Html::a(Yii::t('app', 'Set as default'), Url::to([
                        $this->params['urlPrefix'].'set-default',
                        'contactId' => $searchModel->id,
                    ]), [
                        'title' => Yii::t('app', 'Set as default'),
                    ]);
                },
                'format' => 'raw',
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => Yii::t('app', 'Actions'),
                'template' => '{view} {update} {delete}',
                'urlCreator'=>function($action, $searchModel, $key, $index){
                    return Url::to([
                        $this->params['urlPrefix'].$action,
                        'id' => $searchModel->id
                    ]);
                }
            ],
        ],
    ]); ?>
</div>
