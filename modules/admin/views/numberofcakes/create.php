<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\NumberOfCakes */

$this->title = 'Create Number Of Cakes';
$this->params['breadcrumbs'][] = ['label' => 'Number Of Cakes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="number-of-cakes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
