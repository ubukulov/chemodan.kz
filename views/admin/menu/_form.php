<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Menu;
use Itstructure\FieldWidgets\{Fields, FieldType};

/* @var $this yii\web\View */
/* @var $model app\models\Menu */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="menu-form">

    <?php $this->registerJs("CKEDITOR.plugins.addExternal('pbckcode', '/plugins/pbckcode/plugin.js', '');"); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(Menu::find()->all(),'id','title'),['prompt'=>'Выберите родителя']); ?>

    <?php echo Fields::widget([
        'fields' => [
            [
                'name' => 'content',
                'type' => FieldType::FIELD_TYPE_CKEDITOR_ADMIN,
                'label' => Yii::t('app', 'Content'),
                'preset' => 'full',
                //'customConfig' => '/js/config_ckeditor.js',
                'options' => [
                    'filebrowserBrowseUrl' => '/ckfinder/ckfinder.html',
                    //'filebrowserImageBrowseUrl' => '/ckfinder/ckfinder.html?type=Images',
                    'filebrowserUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    'filebrowserImageUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    'filebrowserWindowWidth' => '1000',
                    'filebrowserWindowHeight' => '700',
                    'extraPlugins' => 'colorbutton',
                    'toolbarGroups' => [
                        ['name' => 'pbckcode']
                    ],
                    'allowedContent' => true,
                    'language' => Yii::$app->language,
                ]
            ],
        ],
        'model'         => $model,
        'form'          => $form,
    ]) ?>


    <?= $form->field($model, 'seo_title')->textInput() ?>

    <?= $form->field($model, 'widget_title')->textInput() ?>

    <?= $form->field($model, 'keywords')->textarea() ?>

    <?= $form->field($model, 'description')->textarea() ?>

    <?= $form->field($model, 'publish')->dropDownList(['1' => 'Да', '0' => 'Нет']); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
