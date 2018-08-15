<?php



use yii\helpers\Html;

use yii\bootstrap\ActiveForm;
$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\AppAsset']);
$this->registerCssFile('@web/css/lk.css',['depends' =>'app\assets\AppAsset']);
$this->registerCssFile('@web/css/base.css',['depends' =>'app\assets\AppAsset']);


$this->title = 'Восстановление пароля';

$this->params['breadcrumbs'][] = $this->title;

?>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm col-xs">
                <div class="reg-done">
                    <div class="reg-done__header">
                        <h2>Отлично!</h2>
                    </div>
                    <div class="reg-done__desc">
                        Мы отправили письмо на Вашу почту! <br/><br/>Для подтверждения регистрации перейдите по ссылке в письме.
                    </div>
                    <div class="reg-done__footer">
                        <a href="<?=\yii\helpers\Url::to('/site/signup/')?>" class="btn btn_two">Вернуться на главную страницу</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>