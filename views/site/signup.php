<?phpuse app\models\User;use yii\helpers\Html;use yii\bootstrap\ActiveForm;use app\models\Connect;$this->registerCssFile('@web/css/flexboxgrid.css',['depends' =>'app\assets\AppAsset']);$this->registerCssFile('@web/css/lk.css',['depends' =>'app\assets\AppAsset']);$this->registerCssFile('@web/css/base.css',['depends' =>'app\assets\AppAsset']);$this->registerJsFile('@web/js/menu.js',['depends' =>'app\assets\AppAsset']);$this->registerJsFile('@web/js/tabs.js',['depends' =>'app\assets\AppAsset']);$this->title = 'Вход';$this->params['breadcrumbs'][] = $this->title;?><div class="wrapper">    <div class="content-wrapper">        <div class="container">            <div class="row">                <div class="col-md-4 col-sm col-xs">                    <div class="singin_tab_wrp">                        <div class="tabs">                            <ul class="tabs__controls">                                <li class="tabs__controls-item tabs__controls-link--active">                                    <a href="#" class="tabs__controls-link">Вход</a>                                </li>                                <li class="tabs__controls-item">                                    <a href="#" class="tabs__controls-link">Регистрация</a>                                </li>                            </ul>                            <div class="tabs__list">                                <div class="tabs__item tabs__item--active">                                    <?php $form = ActiveForm::begin([                                        'layout' => 'horizontal',                                        'options' => ['class' => 'def_form'], /* класс формы */                                        'fieldConfig' => [ /* классы полей формы */                                            'template' => "<div>{label}\n{input}\n{error}</div>",                                            'horizontalCssClasses' => [                                                'label' => 'input_description',                                                'input' => 'form_input',                                            ],                                        ],                                    ]); ?>                                    <?= $form->field($model_login, 'username') ?>                                    <?= $form->field($model_login, 'password', [                                        'template' => '<div>{label}{input}{error}</div>',//                                        'class'=>'form-inputt'                                    ])->passwordInput() ?>                                    <div class="def_form__footer">                                        <?= Html::submitButton('Войти', ['class' => 'btn btn_two', 'name' => 'contact-button']) ?>                                        <a href="<?=\yii\helpers\Url::to('/site/request-password-reset/')?>" class="forgot-pass color-caral">Забыли пароль?</a>                                    </div>                                    <?php ActiveForm::end(); ?>                                </div>                                <div class="tabs__item">                                    <?php $form = ActiveForm::begin([                                        'layout' => 'horizontal',                                        'options' => ['class' => 'def_form'], /* класс формы */                                        'fieldConfig' => [ /* классы полей формы */                                            'template' => "{label}\n{input}\n{error}",                                            'horizontalCssClasses' => [                                                'label' => 'input_description',                                                'input' => 'form-input',                                            ],                                        ],                                    ]); ?>                                    <?= $form->field($model, 'email') ?>                                    <?= $form->field($model, 'fio') ?>                                    <?= $form->field($model, 'tel') ?>                                    <?= $form->field($model, 'password', [                                        'template' => '{label}{input}{error}'                                    ])->passwordInput([ 'options' => ['class' => 'form-input'],]) ?>                                    <div class="form-group">                                        <?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn_two', 'name' => 'contact-button']) ?>                                    </div>                                    <?php ActiveForm::end(); ?>                                </div>                            </div>                        </div>                    </div>                </div>            </div>        </div>    </div>    <footer>        <div class="container-fluid">            <div class="row">                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">                    <div class="footer_link">                        <a href="#" class="vk">                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><g><path d="M25.6,15.8c-0.7-0.9-1.6-1.6-2.4-2.4c-0.7-0.7-0.8-1.1-0.2-1.9c0.6-0.9,1.3-1.8,2-2.7 c0.6-0.8,1.2-1.7,1.5-2.7c0.2-0.6,0-0.9-0.6-1c-0.1,0-0.2,0-0.3,0h-3.9c-0.5,0-0.7,0.2-0.9,0.6c-0.2,0.6-0.5,1.1-0.7,1.7 c-0.6,1.2-1.3,2.5-2.3,3.5c-0.2,0.2-0.4,0.5-0.8,0.4c-0.4-0.2-0.6-0.9-0.6-1.1V5.7c-0.1-0.6-0.2-0.9-0.9-1h-4 c-0.5,0-0.8,0.2-1.1,0.5c-0.2,0.2-0.2,0.3,0.1,0.4c0.7,0.1,1,0.6,1.1,1.2c0.2,1.1,0.1,2.1,0.1,3.2c0,0.3-0.1,0.6-0.2,0.9 c-0.2,0.5-0.5,0.6-0.9,0.3s-0.6-0.6-0.9-1C8.7,8.8,8,7.4,7.3,5.8c-0.2-0.4-0.5-0.7-1-0.7c-1.2,0-2.3,0-3.5,0c-0.7,0-0.9,0.4-0.6,1 c1.3,2.8,2.7,5.5,4.5,8c0.9,1.3,2,2.4,3.4,3.2c1.6,0.9,3.3,1.2,5.1,1.1c0.8,0,1.1-0.3,1.1-1.1c0-0.6,0.1-1.1,0.4-1.7 c0.3-0.5,0.7-0.6,1.2-0.3c0.2,0.2,0.4,0.4,0.6,0.6c0.5,0.5,0.9,1.1,1.4,1.6c0.6,0.6,1.3,1,2.3,0.9h3.6c0.6,0,0.9-0.7,0.5-1.4 C26.3,16.6,26,16.2,25.6,15.8z"/></g></g></svg>                        </a>                        <a href="#" class="inst">                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><g><path d="M18.9,1.1H9.8c-3.1,0-5.6,2.5-5.6,5.6v9.1c0,3.1,2.5,5.6,5.6,5.6h9.1c3.1,0,5.6-2.5,5.6-5.6V6.7 C24.4,3.6,21.9,1.1,18.9,1.1z M22.6,15.8c0,2.1-1.7,3.8-3.8,3.8h-9c-2.1,0-3.8-1.7-3.8-3.8V6.7c0-2.1,1.7-3.8,3.8-3.8h9.1 c2.1,0,3.8,1.7,3.8,3.8L22.6,15.8L22.6,15.8z"/><path d="M14.3,6c-2.9,0-5.2,2.3-5.2,5.2s2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C19.5,8.4,17.2,6,14.3,6z M14.3,14.7 c-1.9,0-3.4-1.5-3.4-3.4s1.5-3.4,3.4-3.4s3.4,1.5,3.4,3.4C17.7,13.1,16.2,14.7,14.3,14.7z"/><path d="M19.8,4.5c-0.3,0-0.7,0.1-0.9,0.4c-0.2,0.2-0.4,0.6-0.4,0.9c0,0.3,0.1,0.7,0.4,0.9c0.2,0.2,0.6,0.4,0.9,0.4 s0.7-0.1,0.9-0.4c0.2-0.2,0.4-0.6,0.4-0.9c0-0.3-0.1-0.7-0.4-0.9C20.4,4.6,20.1,4.5,19.8,4.5z"/></g></g></svg>                        </a>                        <a href="#" class="hld">                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 28.6 23.1" xml:space="preserve"><g><path class="svg_link-liq" d="M4.2,12C4.1,12,4.2,11.9,4.2,12c1.3,0,6.9,0.3,9.8,1.6c2.8,1.3,8-0.7,9.6-1.4c0.1,0,0.1,0.1,0.1,0.1L16,18.4 c-0.1,0.1-0.3,0.2-0.5,0.2h-2.8c-0.2,0-0.3-0.1-0.5-0.2L4.2,12z"/> <g><path d="M26.8,9.8c0,0-0.8,0.6-1.1,0.9c-0.1,0.1-0.2,0.1-0.3,0l-9.5-7.5C15.8,3.1,15.9,3,16,3h2.8 c0.3,0,0.5,0.1,0.7,0.3L27,9.1l0,0C27.4,9.2,27.1,9.6,26.8,9.8z"/><path d="M28.1,10.3v1.9c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.4,0.4l-8,6.2c-0.2,0.2-0.5,0.3-0.7,0.3h-2.8 c-0.1,0-0.2-0.1-0.1-0.2l0.3-0.2l9.9-7.9l1.2-1l0.1-0.1c0.2-0.2,0.4-0.5,0.1-0.8c0.1,0.1,0.2,0.3,0.3,0.4 C28,10,28.1,10.1,28.1,10.3z"/></g><g><path d="M1.6,12.6c0,0,0.8-0.6,1.1-0.9c0.1-0.1,0.2-0.1,0.3,0l9.5,7.5c0.1,0.1,0,0.2-0.1,0.2H9.6 c-0.3,0-0.5-0.1-0.7-0.3l-7.5-5.8l0,0C1,13.2,1.3,12.9,1.6,12.6z"/><path d="M0.4,12.2v-1.9c0-0.2,0-0.3,0.1-0.5s0.2-0.3,0.4-0.5l8-6.2C9,3,9.3,2.9,9.6,2.9h2.8c0.1,0,0.2,0.1,0.1,0.2 l-0.3,0.2l-9.9,7.9l-1.2,1L1,12.3c-0.2,0.2-0.4,0.5-0.1,0.8c-0.1-0.1-0.2-0.3-0.3-0.4C0.4,12.5,0.4,12.4,0.4,12.2z"/></g></g> </svg>                        </a>                    </div>                </div>                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">                    <div class="footer_menu">                        <ul>                            <li><a href="#">Ассортимент</a></li>                        </ul>                        <ul>                            <li><a href="#">Конструктор</a></li>                        </ul>                        <ul>                            <li><a href="#">Личный кабинет</a></li>                        </ul>                        <ul>                            <li><a href="#">Корзина</a></li>                        </ul>                    </div>                    <div class="footer_copirates" itemscope itemtype="http://schema.org/Organization">                        © <span itemprop="name">Тортодельня</span> 2017-2018                    </div>                </div>                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">                    <div class="footer_info" itemscope itemtype="http://schema.org/Organization">                        <div class="footer_contacts">                            <span itemprop="email">tortodelna@gmail.com</span>                            <span class="footer_contacts-tel" itemprop="telephone">+7 495 739–70–00</span>                        </div>                        <div class="footer_pay"><img class="img-responsive" src="img/pay.png" alt=""></div>                    </div>                </div>            </div>        </div>    </footer></div>