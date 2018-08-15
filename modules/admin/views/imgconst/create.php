<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Imgconst */

$this->title = 'Create Imgconst';
$this->params['breadcrumbs'][] = ['label' => 'Imgconsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="imgconst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'img' => $img,
        'typeList' => $typeList,
        'tiersconstList' => $tiersconstList,
        'positionList' => $positionList,
    ]) ?>

</div>
