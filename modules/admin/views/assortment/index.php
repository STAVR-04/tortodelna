<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Продукция';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assortment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'categories_id',
            'title',
            'content:ntext',
            'new:ntext',
            // 'pay',
            // 'pay_action',
            [
                'label' => 'Превью',
                'format' => 'raw',
                'value' => function($assortment){
                    return Html::img($assortment->img,[
                        'alt'=>'Превью',
                        'style' => 'width:100px;'
                    ]);
                },
            ],
            // 'new_img:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
