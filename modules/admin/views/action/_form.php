<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Action */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="action-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 500,
            'options' => array(
                'minHeight' => 300,
                'lang' => Yii::$app->language,
                'imageUpload' => Url::to(['default/image-upload']),
                'formatting' => array('p', 'blockquote', 'pre', 'h2', 'strong'),
            ),

            'imageUpload' => Url::to(['default/image-upload']),
            'validatorOptions' => ['maxSize' => 40000],    //макс. размер файла
            'pastePlainText' => true,
            'buttonSource' => true,

            'plugins' => [
                'video',
                'imagemanager',
                'filemanager',
            ]
        ]
    ]);
    ?>

    <?= $form->field($img, 'img')->fileInput()->label('Превью') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
