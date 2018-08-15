<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<?php
if (Yii::$app->request->get('add')) {
    ?>
    <div class="modal_zone" style="z-index: 9999;">
        <div class="modal_body">
            <div class="modal_body__header">
                <a href="#" class="header__close">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"
                         xmlns:xlink="http://www.w3.org/1999/xlink" enable-background="new 0 0 64 64">
                        <g>
                            <path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"/>
                        </g>
                    </svg>
                </a>
            </div>
            <div class="modal_body__content">
                <div class="modal_body__intro">
                    <h3>Ваш торт успешно добавлен в корзину!</h3>
                </div>
                <div class="modal_body__btn">
                    <a href="<?= \yii\helpers\Url::to('/site/basket/')?>" class="btn btn_one btn_modal">Перейти к заказу</a>
                    <a href="<?=\yii\helpers\Url::to('/site/assortment/?id_type=1')?>" class="btn btn_two btn_modal">Продолжить покупки</a>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<header>
    <div class="menu">
        <ul>
            <li><a href="<?=\yii\helpers\Url::to('/site/assortment/?id_type=1')?>">Ассортимент</a></li>
            <li><a href="<?=\yii\helpers\Url::to('/site/constructor/')?>">Конструктор</a></li>
            <li><a href="<?=\yii\helpers\Url::to('/site/contact/')?>">Контакты</a></li>
            <div class="menu_section">
                <li><a href="<?php if (Yii::$app->user->isGuest){ echo \yii\helpers\Url::to('/site/signup/');}
                else{ echo \yii\helpers\Url::to('/site/lk/'); }?>">Личный кабинет</a></li>
                <?php if (!Yii::$app->user->isGuest){
                    ?>
                    <li><a href="<?= \yii\helpers\Url::to('/site/logout/')?>" data-method="post">Выход</a></li>
                    <?php
                }?>
                <li><a href="<?=\yii\helpers\Url::to('/site/basket/')?>">Корзина</a></li>
            </div>
            <div class="menu_section">
                <li><span class="color-purple">+7(913) 992 85-77</span></li>
            </div>
        </ul>
    </div>
    <div class="menu_bodyBlur"></div>






            <div class="header_wrp">
                <div class="header">
                    <div class="header_sec-left">
                        <a class="menu_link" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="header_sec-right_wrp">
                        <div class="header_sec-right">
                            <a href="<?=\yii\helpers\Url::to('/site/basket/')?>" class="trash"><span><?=$this->params['count']?></span></a>
                            <a href="<?=\yii\helpers\Url::home()?>" class="logo"></a>
                        </div>
                    </div>
                </div>                
            </div>






</header>
<?php $this->beginBody() ?>
<body>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

