<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;	
?>
<h1>Hello World!</h1>
<?php 
echo '<pre>';
print_r ($model); 
echo '</pre>';
$form = ActiveForm::begin(); ?>
<?= $form->field($model, 'name') ?>
<?= $form->field($model, 'email') ?>
<?= $form->field($model, 'text')->textarea([ 'rows' => 5 ]) ?>
<?= Html::submitButton('Отправить', [ 'class' => 'btn btn-success' ]) ?>
<?php
ActiveForm::end();
?>