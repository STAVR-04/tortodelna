<?php
$this->registerCssFile('@web/css/asrt.css',['depends' =>'app\assets\AppAsset']);
$this->registerCssFile('@web/css/slickySlider.css',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/slickySlider-init.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/slickySlider.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/prod.js',['depends' =>'app\assets\AppAsset']);

?>
<div class="wrapper">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md col-sm col-xs">
                    <div class="back-page">
                        <div class="change-arrow">
                            <a href="#" onclick="history.back();return false;" class="back_change">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 32.635 32.635" xml:space="preserve"><g><path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5 S32.411,16.817,32.135,16.817z"/><path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354 L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707 C13.293,29.304,13.165,29.353,13.037,29.353z"/></g>
                                </svg>
                                <span>Назад</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="product_image_wrp">
                        <div class="gallery">
                            <?php
                            foreach ($model['slider'] as $value) {
                                ?>
                                <div class="gallery-cell"
                                     style="background: url(/web<?=$value['content']?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></div>
                                <?php
                            }
                            ?>
                        </div>

                        <ol class="gallery-nav">
                            <?php
                            foreach ($model['slider'] as $value) {
                            ?>
                            <li class="is-selected" style="background: url(/web<?=$value['content']?>) no-repeat center;background-color: #F7F7F7;-webkit-background-size: cover;-moz-background-size: cover;background-size: cover;-o-background-size: cover;"></li>
                                <?php
                            }
                            ?>
                        </ol>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 first-xs last-md last-sm">
                    <div class="product_info_wrp">
                        <div class="product_info_intro">
                            <div class="product_info_header">
                                <h2><?=$model->title?></h2>
                            </div>
                            <div class="product_info_desc">
                                <span><?=$model->content?></span>
                            </div>
                        </div>
                        <div class="product_info_control">
                            <div class="product_info_control_sum">
                                <span>Количество:</span>
                                <select>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <a href="#" class="btn btn_two add" id="<?=$model->id?>">Добавить в корзину</a>
                        </div>
                        <div class="product_info_change">
                            <div class="change-arrow">
                                <a href="#" class="back_change">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 32.635 32.635" xml:space="preserve"><g><path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5 S32.411,16.817,32.135,16.817z"/><path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354 L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707 C13.293,29.304,13.165,29.353,13.037,29.353z"/></g>
                                       </svg>
                                    <span>Предыдущий</span>
                                </a>
                                <a href="#" class="next_change">
                                    <span>Далее</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 32.635 32.635" xml:space="preserve"><g><path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5 S32.411,16.817,32.135,16.817z"/><path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136 c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354 s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/></g>
                                        </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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