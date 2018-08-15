<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Imgconst */

$this->title = 'Update Imgconst: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Imgconsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="imgconst-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'img' => $img,
        'typeList' => $typeList,
        'tiersconstList' => $tiersconstList,
        'positionList' => $positionList,
    ]) ?>

</div>
