<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use vova07\imperavi\Widget;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Assortment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assortment-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'categories_id')->dropDownList($categories) ?>
    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'content')->widget(Widget::className(), [
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 500,
            'options' => array(
                'minHeight' => 300,
                'lang' => Yii::$app->language,
                'formatting' => array('p', 'blockquote', 'pre', 'h2', 'strong'),
            ),

            'validatorOptions' => ['maxSize' => 40000],    //макс. размер файла
            'pastePlainText' => true,
            'buttonSource' => true,

            'plugins' => [
                'video',
                'filemanager',
            ]
        ]
    ]);
    ?>

    <?= $form->field($model, 'new')->checkbox() ?>

    <?= $form->field($model, 'pay')->textInput() ?>

    <?= $form->field($model, 'pay_action')->textInput() ?>

    <?= $form->field($img, 'img')->fileInput()->label('Превью') ?>
    <?= $form->field($new_img, 'img2')->fileInput()->label('Изображение для раздела "Новое"') ?>
    <?php
    if(!strpos(Url::to(), 'create')) {
        if ($slider_update) {
            ?>
            <br>
            <h2> Слайдер </h2>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>картинка</th>
                    <th>Удалить</th>
                </tr>
                </thead>
                <tbody>

                <?php

                foreach ($slider_update as $item) {
                    ?>
                    <tr>
                        <td><img src="<?= $item->content ?>" style="width: 50px;"></td>
                        <td>
                            <button type="button" class="btn btn-warning delete-slider" id="delete<?= $item->id ?>">Удалить!</button>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <?php
        } else {
            echo "<h2>Изображения отсутствуют!</h2>";
        }
    }?>
    <?= $form->field($slider, 'img[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Сохранить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
