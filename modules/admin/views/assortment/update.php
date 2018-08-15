<?php

use yii\helpers\Html;
$this->registerJsFile('@web/js/ajax-admin-slider-delete-img.js',['depends' =>'app\assets\AppAsset']);


/* @var $this yii\web\View */
/* @var $model app\models\Assortment */

$this->title = 'Update Assortment: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Assortments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assortment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'categories' => $categories,
        'img' => $img,
        'new_img' => $new_img,
        'slider' => $slider,
        'slider_update' => $slider_update,
    ]) ?>

</div>
