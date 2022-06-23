<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use Itstructure\FieldWidgets\{Fields, FieldType};

/* @var $this yii\web\View */
/* @var $model app\models\SiteSettings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="site-settings-form">

    <?php $this->registerJs("CKEDITOR.plugins.addExternal('pbckcode', '/plugins/pbckcode/plugin.js', '');"); ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone2')->textInput(['maxlength' => true]) ?>

    <?php echo Fields::widget([
        'fields' => [
            [
                'name' => 'info',
                'type' => FieldType::FIELD_TYPE_CKEDITOR_ADMIN,
                'label' => Yii::t('ssettings', 'Info'),
                'preset' => 'standard',
                'options' => [
                    'filebrowserBrowseUrl' => '/ckfinder/ckfinder.html',
                    //'filebrowserImageBrowseUrl' => '/ckfinder/ckfinder.html?type=Images',
                    'filebrowserUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    'filebrowserImageUploadUrl' => '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    'filebrowserWindowWidth' => '1000',
                    'filebrowserWindowHeight' => '700',
                    'extraPlugins' => 'pbckcode',
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

    <?= $form->field($model, 'whatsapp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address1_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address2_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
