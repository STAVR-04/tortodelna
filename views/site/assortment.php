<?php
$this->registerCssFile('@web/css/asrt.css',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/asrt.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\AppAsset']);
$this->title = 'Ассортимент';

?>
<div class="wrapper">
    <div class="content-wrapper">
        <section class="asrt_sales">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
                        <div class="asrt_sales_block-left">
                            <div class="asrt_sales_block_wrp-left">
                                <div class="asrt_sales_image">
                                    <img src="/web<?=$new->new_img?>" class="img-responsive">
                                </div>
                                <div class="asrt_sales_cont">
                                    <span class="asrt_position_attention">Новинка!</span>
                                    <h2 class="color-purple"><?=$new->title?></h2>
                                    <span class="asrt_position_desc"><?=$new->content?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                        <div class="asrt_sales_wrp-right">
                            <div class="asrt_sales_block-right asrt-top" id="sales-infoBtn--one">
                                <div class="asrt_sales_block_wrp-right">
                                    <div class="asrt_sales_cont">
                                        <span class="asrt_position_attention">Успейте!</span>
                                        <h2 class="color-yellow">Закажи один, получи второй!</h2>
                                    </div>
                                </div>
                                <div class="asrt_sales__info one asrt-top" >
                                    <div class="info__header">
                                        <svg viewBox="0 0 64 64"><g><path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path></g></svg>
                                    </div>
                                    <div class="info__block">
                                        <h3 class="block__header">Условия</h3>
                                        <div class="block__desc">
                                            При заказе торта, второй, с меньшей ценой, в подарок.
                                            <br/><br/>
                                            Принять участие может любой желающий.
                                            Акция действительна до 6 сентября 2018 года.
                                        </div>
                                    </div>
                                    <div class="info__block">
                                        <h5 class="block__header">Акция распространяется на:</h5>
                                        <div class="block__desc">
                                            <a href="">Сметанно-черносливный торт</a>
                                            <a href="">Медовик</a>
                                            <a href="">Черемуховый торт</a>
                                            <a href="">Наполеон</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="asrt_sales_block-right asrt-btm" id="sales-infoBtn--two">
                                <div class="asrt_sales_block_wrp-right">
                                    <div class="asrt_sales_cont">
                                        <span class="asrt_position_attention">Акция!</span>
                                        <h2 class="color-purple">Кексы в подарок!</h2>
                                    </div>
                                </div>
                                <div class="asrt_sales__info two asrt-btm">
                                    <div class="info__header">
                                        <svg viewBox="0 0 64 64"><g><path d="M28.941,31.786L0.613,60.114c-0.787,0.787-0.787,2.062,0,2.849c0.393,0.394,0.909,0.59,1.424,0.59   c0.516,0,1.031-0.196,1.424-0.59l28.541-28.541l28.541,28.541c0.394,0.394,0.909,0.59,1.424,0.59c0.515,0,1.031-0.196,1.424-0.59   c0.787-0.787,0.787-2.062,0-2.849L35.064,31.786L63.41,3.438c0.787-0.787,0.787-2.062,0-2.849c-0.787-0.786-2.062-0.786-2.848,0   L32.003,29.15L3.441,0.59c-0.787-0.786-2.061-0.786-2.848,0c-0.787,0.787-0.787,2.062,0,2.849L28.941,31.786z"></path></g></svg>
                                    </div>
                                    <div class="info__block">
                                        <h3 class="block__header">Условия</h3>
                                        <div class="block__desc">
                                            При заказе торта, второй, с меньшей ценой, в подарок!
                                            <br/><br/>
                                            Принять участие может любой желающий.
                                            Акция действительна до 6 сентября 2018 года.
                                        </div>
                                    </div>
                                    <div class="info__block">
                                        <h5 class="block__header">Акция распространяется на:</h5>
                                        <div class="block__desc">
                                            <a href="">Сметанно-черносливный торт</a>
                                            <a href="">Медовик</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="asrt_tile">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="asrt_sectionFilter">
                                <?php
                                foreach ($type as $value) {
                                    ?>
                                    <a href="<?=\yii\helpers\Url::to(['/site/assortment/', 'id_type' => $value->id])?>" class="<?php
                                    if (Yii::$app->request->get('id_type')==$value->id){
                                    ?>asrt_sectionFilter--active<?php }else{ echo "asrt_sectionFilter--noActive"; } ?>"><?=$value->name?></a>
                                    <?php
                                }
                                ?>
                                <div class="asrt_radioFilter radioFilter radioFilter--noActive <?php if (Yii::$app->request->get('action')){
                                    ?>radioFilter--active
                                <?php }else{
                                    ?>radioFilter--noActive<?php
                                } ?>
                                    ">

                                    <a href="<?=\yii\helpers\Url::to(['/site/assortment/', 'id_type' => Yii::$app->request->get('id_type'),
                                        'action' => 'true'])?>">Со скидкой</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($model as $value) {
                        if ($value->pay_action) {
                            ?>

                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="asrt_tile_wrp-adptv">
                                    <div class="asrt_tile_wrp">
                                        <div itemscope itemtype="http://schema.org/Product" class="asrt_tile_block">
                                            <div class="asrt_tile_block_content">
                                                <a href="<?= \yii\helpers\Url::to(['/site/product/', 'id' => $value->id]) ?>" class="asrt_tile_block_img" style="background: url(/web<?= $value->img ?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;">
                                                    <div class="asrt_tile_block_saleMark">Акция</div>
                                                </a>

                                                <div itemprop="name" class="asrt_tile_desc"><?= $value->title ?></div>
                                                <div class="asrt_tile_price">
                                                    <span class="asrt_tile_price--new"><?= $value->pay_action ?> р.</span>
                                                    <span class="asrt_tile_price--old"><?= $value->pay ?> р.</span>
                                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        <meta itemprop="price" content="<?= $value->pay_action ?>.00">
                                                        <meta itemprop="priceCurrency" content="RUB">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="asrt_tile_block_hoverBlock">
                                                <span itemprop="description" class="asrt_position_desc"><?= $value->content ?></span>
                                                <a href="<?=\yii\helpers\Url::to('/site/savecake/?id='.$value->id)?>" class="btn btn_two">Добавить в корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }else{
                            ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="asrt_tile_wrp-adptv">
                                    <div class="asrt_tile_wrp">
                                        <div itemscope itemtype="http://schema.org/Product" class="asrt_tile_block">
                                            <div class="asrt_tile_block_content">
                                                <a href="<?= \yii\helpers\Url::to(['/site/product/', 'id' => $value->id]) ?>"
                                                   class="asrt_tile_block_img"
                                                   style="background: url(/web<?= $value->img ?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></a>

                                                <div itemprop="name" class="asrt_tile_desc"><?= $value->title ?>
                                                </div>
                                                <div class="asrt_tile_price">
                                                    <span class="asrt_tile_price--actual"><?= $value->pay ?> р.</span>
                                                    <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                                        <meta itemprop="price" content="<?= $value->pay ?>.00">
                                                        <meta itemprop="priceCurrency" content="RUB">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="asrt_tile_block_hoverBlock">
                                                <span itemprop="description"
                                                      class="asrt_position_desc"><?= $value->content ?></span>
                                                <a href="<?=\yii\helpers\Url::to('/site/savecake/?id='.$value->id)?>" class="btn btn_two">Добавить в корзину</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>
            </div>
        </section>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                    <div class="footer_link">
                        <a href="#" class="vk">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><g><path d="M25.6,15.8c-0.7-0.9-1.6-1.6-2.4-2.4c-0.7-0.7-0.8-1.1-0.2-1.9c0.6-0.9,1.3-1.8,2-2.7 c0.6-0.8,1.2-1.7,1.5-2.7c0.2-0.6,0-0.9-0.6-1c-0.1,0-0.2,0-0.3,0h-3.9c-0.5,0-0.7,0.2-0.9,0.6c-0.2,0.6-0.5,1.1-0.7,1.7 c-0.6,1.2-1.3,2.5-2.3,3.5c-0.2,0.2-0.4,0.5-0.8,0.4c-0.4-0.2-0.6-0.9-0.6-1.1V5.7c-0.1-0.6-0.2-0.9-0.9-1h-4 c-0.5,0-0.8,0.2-1.1,0.5c-0.2,0.2-0.2,0.3,0.1,0.4c0.7,0.1,1,0.6,1.1,1.2c0.2,1.1,0.1,2.1,0.1,3.2c0,0.3-0.1,0.6-0.2,0.9 c-0.2,0.5-0.5,0.6-0.9,0.3s-0.6-0.6-0.9-1C8.7,8.8,8,7.4,7.3,5.8c-0.2-0.4-0.5-0.7-1-0.7c-1.2,0-2.3,0-3.5,0c-0.7,0-0.9,0.4-0.6,1 c1.3,2.8,2.7,5.5,4.5,8c0.9,1.3,2,2.4,3.4,3.2c1.6,0.9,3.3,1.2,5.1,1.1c0.8,0,1.1-0.3,1.1-1.1c0-0.6,0.1-1.1,0.4-1.7 c0.3-0.5,0.7-0.6,1.2-0.3c0.2,0.2,0.4,0.4,0.6,0.6c0.5,0.5,0.9,1.1,1.4,1.6c0.6,0.6,1.3,1,2.3,0.9h3.6c0.6,0,0.9-0.7,0.5-1.4 C26.3,16.6,26,16.2,25.6,15.8z"/></g></g></svg>
                        </a>
                        <a href="#" class="inst">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><g><path d="M18.9,1.1H9.8c-3.1,0-5.6,2.5-5.6,5.6v9.1c0,3.1,2.5,5.6,5.6,5.6h9.1c3.1,0,5.6-2.5,5.6-5.6V6.7 C24.4,3.6,21.9,1.1,18.9,1.1z M22.6,15.8c0,2.1-1.7,3.8-3.8,3.8h-9c-2.1,0-3.8-1.7-3.8-3.8V6.7c0-2.1,1.7-3.8,3.8-3.8h9.1 c2.1,0,3.8,1.7,3.8,3.8L22.6,15.8L22.6,15.8z"/><path d="M14.3,6c-2.9,0-5.2,2.3-5.2,5.2s2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C19.5,8.4,17.2,6,14.3,6z M14.3,14.7 c-1.9,0-3.4-1.5-3.4-3.4s1.5-3.4,3.4-3.4s3.4,1.5,3.4,3.4C17.7,13.1,16.2,14.7,14.3,14.7z"/><path d="M19.8,4.5c-0.3,0-0.7,0.1-0.9,0.4c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.7,0.4,0.9c0.2,0.2,0.6,0.4,0.9,0.4 s0.7-0.1,0.9-0.4c0.2-0.2,0.4-0.6,0.4-0.9c0-0.3-0.1-0.7-0.4-0.9C20.4,4.6,20.1,4.5,19.8,4.5z"/></g></g></svg>
                        </a>
                        <a href="#" class="hld">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><path class="svg_link-liq" d="M4.2,12C4.1,12,4.2,11.9,4.2,12c1.3,0,6.9,0.3,9.8,1.6c2.8,1.3,8-0.7,9.6-1.4c0.1,0,0.1,0.1,0.1,0.1L16,18.4 c-0.1,0.1-0.3,0.2-0.5,0.2h-2.8c-0.2,0-0.3-0.1-0.5-0.2L4.2,12z"/> <g><path d="M26.8,9.8c0,0-0.8,0.6-1.1,0.9c-0.1,0.1-0.2,0.1-0.3,0l-9.5-7.5C15.8,3.1,15.9,3,16,3h2.8 c0.3,0,0.5,0.1,0.7,0.3L27,9.1l0,0C27.4,9.2,27.1,9.6,26.8,9.8z"/><path d="M28.1,10.3v1.9c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.4,0.4l-8,6.2c-0.2,0.2-0.5,0.3-0.7,0.3h-2.8 c-0.1,0-0.2-0.1-0.1-0.2l0.3-0.2l9.9-7.9l1.2-1l0.1-0.1c0.2-0.2,0.4-0.5,0.1-0.8c0.1,0.1,0.2,0.3,0.3,0.4 C28,10,28.1,10.1,28.1,10.3z"/></g><g><path d="M1.6,12.6c0,0,0.8-0.6,1.1-0.9c0.1-0.1,0.2-0.1,0.3,0l9.5,7.5c0.1,0.1,0,0.2-0.1,0.2H9.6 c-0.3,0-0.5-0.1-0.7-0.3l-7.5-5.8l0,0C1,13.2,1.3,12.9,1.6,12.6z"/><path d="M0.4,12.2v-1.9c0-0.2,0-0.3,0.1-0.5s0.2-0.3,0.4-0.5l8-6.2C9,3,9.3,2.9,9.6,2.9h2.8c0.1,0,0.2,0.1,0.1,0.2 l-0.3,0.2l-9.9,7.9l-1.2,1L1,12.3c-0.2,0.2-0.4,0.5-0.1,0.8c-0.1-0.1-0.2-0.3-0.3-0.4C0.4,12.5,0.4,12.4,0.4,12.2z"/></g></g> </svg>
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <div class="footer_menu">
                        <ul>
                            <li><a href="#">Ассортимент</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Конструктор</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Личный кабинет</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Корзина</a></li>
                        </ul>
                    </div>
                    <div class="footer_copirates" itemscope itemtype="http://schema.org/Organization">
                        © <span itemprop="name">Тортодельня</span> 2017-2018
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="footer_info" itemscope itemtype="http://schema.org/Organization">
                        <div class="footer_contacts">
                            <span itemprop="email">tortodelna@gmail.com</span>
                            <span class="footer_contacts-tel" itemprop="telephone">+7 495 739–70–00</span>
                        </div>
                        <div class="footer_pay"><img class="img-responsive" src="/web/img/pay.png" alt=""></div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>