<?php



use yii\helpers\Html;

use yii\grid\GridView;

use yii\helpers\Url;



/* @var $this yii\web\View */

/* @var $dataProvider yii\data\ActiveDataProvider */



$this->title = 'Imgconsts';

$this->params['breadcrumbs'][] = $this->title;

?>

<div class="imgconst-index">



    <h1><?= Html::encode($this->title) ?></h1>



    <p>

        <?= Html::a('Create Imgconst', ['create'], ['class' => 'btn btn-success']) ?>

    </p>

    <?= GridView::widget([

        'dataProvider' => $dataProvider,

        'columns' => [

            ['class' => 'yii\grid\SerialColumn'],



            'id',

            [

                'label' => 'Изображение',

                'format' => 'raw',

                'value' => function($model){

                    return Html::img('/web'.$model->img,[

                        'alt'=>'yii2 - картинка в gridview',

                        'style' => 'width:100px;'

                    ]);

                },

            ],

            'title',

            'price',

            'id_tier',

            'id_position',



            ['class' => 'yii\grid\ActionColumn'],

        ],

    ]); ?>

</div>

