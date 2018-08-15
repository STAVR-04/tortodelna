<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiersconst */

$this->title = 'Create Tiersconst';
$this->params['breadcrumbs'][] = ['label' => 'Tiersconsts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiersconst-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
