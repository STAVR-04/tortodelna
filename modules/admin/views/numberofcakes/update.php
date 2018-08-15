<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\NumberOfCakes */

$this->title = 'Update Number Of Cakes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Number Of Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="number-of-cakes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
