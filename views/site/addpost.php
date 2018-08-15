<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 21.10.2017
 * Time: 16:14
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
echo "<h2>Добавление нового поста</h2>";
 ?>




<?php $form = ActiveForm::begin([]); ?>

<?= $form->field($post, 'title')->textInput() ?>
<?= $form->field($post, 'text')->textInput() ?>
<?= $form->field($model, 'image')->fileInput() ?>

<div class="form-group">
    <?= Html::submitButton(Yii::t('app', 'save'), ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
