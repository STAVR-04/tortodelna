<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Imgconst */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="imgconst-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($img, 'img')->fileInput()->label('Превью') ?>
    <img src="<?=$model->img?>">
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'price')->textInput() ?>
    <?= $form->field($model, 'id_type')->dropDownList($typeList) ?>

    <?= $form->field($model, 'id_tier')->dropDownList($tiersconstList) ?>

    <?= $form->field($model, 'id_position')->dropDownList($positionList) ?>
    <?= $form->field($model, 'pokr_type')->dropDownList([
            'Мастика' => 'Мастика',
            'Крем' => 'Крем',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Добавить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
