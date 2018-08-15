<?php

/* @var $this yii\web\View */

use app\models\User;

$this->title = 'Тортодельня';

?>
<main>
    <section class="intro">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-no-padding">
                    <div class="intro_block-one">
                        <div class="col-lg-5">
                            <div class="intro_block-one_header">
                                <h1>
                                    Хочешь сделать уникальный торт самостоятельно?
                                </h1>
                                <a href="<?=\yii\helpers\Url::to('/site/constructor/')?>" class="btn btn_one">Собрать торт</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 col-no-padding">
                    <a href="<?=\yii\helpers\Url::to('/site/assortment/?id_type=1')?>" class="intro_block-two">
                        <h1 class="color-white">Посмотрите весь ассортимент</h1>
                        <div></div>
                    </a>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-no-padding">
                    <a href="#" class="intro_block-three">
                        <h1 class="color-purple">Акции и скидки</h1>
                        <div></div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>