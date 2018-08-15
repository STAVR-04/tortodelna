<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiers */

$this->title = 'Create Tiers';
$this->params['breadcrumbs'][] = ['label' => 'Tiers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
