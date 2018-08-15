<?php
$this->registerCssFile('@web/css/kit.css',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/kit-interface.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/constructor.js',['depends' =>'app\assets\AppAsset']);
?>
<?php \yii\widgets\Pjax::begin(); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Блок характеристик -->
        <div class="col-lg-3 col-xs">
            <div class="kit_tuning_wrp">
                <div class="kit_tuning_action_left">
                    <a class="tooltips kit_tuning_return">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512.001 512.001" xml:space="preserve"><g><g><path d="M384.834,180.699c-0.698,0-348.733,0-348.733,0l73.326-82.187c4.755-5.33,4.289-13.505-1.041-18.26 c-5.328-4.754-13.505-4.29-18.26,1.041l-82.582,92.56c-10.059,11.278-10.058,28.282,0.001,39.557l82.582,92.561 c2.556,2.865,6.097,4.323,9.654,4.323c3.064,0,6.139-1.083,8.606-3.282c5.33-4.755,5.795-12.93,1.041-18.26l-73.326-82.188 c0,0,348.034,0,348.733,0c55.858,0,101.3,45.444,101.3,101.3s-45.443,101.3-101.3,101.3h-61.58 c-7.143,0-12.933,5.791-12.933,12.933c0,7.142,5.79,12.933,12.933,12.933h61.58c70.12,0,127.166-57.046,127.166-127.166 C512,237.745,454.954,180.699,384.834,180.699z"/></g></svg>
                        <span>
                                Вернуться назад
                            </span>
                    </a>
                </div>
                <div class="kit_tuning_action_right">
                    <div class="kit_tuning_header">
                        <h3>Настройка</h3>
                        <a href="<?=\yii\helpers\Url::to(['/site/constructor/','reset'=> 'true'])?>" class="kit_tuning_reload">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 34.652 34.652" xml:space="preserve"><g><g><path d="M15.529,32.855C6.966,32.855,0,25.889,0,17.326C0,8.763,6.966,1.797,15.529,1.797 c8.563,0,15.529,6.967,15.529,15.529c0,0.49-0.397,0.888-0.888,0.888c-0.49,0-0.888-0.397-0.888-0.888 c0-7.584-6.17-13.755-13.754-13.755c-7.585,0-13.755,6.171-13.755,13.755c0,7.584,6.17,13.754,13.755,13.754 c4.852,0,9.397-2.601,11.862-6.787c0.249-0.423,0.793-0.562,1.215-0.314c0.422,0.248,0.562,0.792,0.315,1.215 C26.139,29.919,21.007,32.855,15.529,32.855z"/></g><g><path d="M30.17,18.214c-0.153,0-0.309-0.04-0.45-0.123l-5.561-3.284c-0.422-0.249-0.562-0.793-0.313-1.215 c0.25-0.422,0.794-0.562,1.216-0.312l4.852,2.865l3.123-4.473c0.281-0.402,0.834-0.5,1.235-0.22c0.402,0.28,0.5,0.833,0.22,1.235 l-3.594,5.146C30.726,18.08,30.451,18.214,30.17,18.214z"/></g> </g> </svg>
                            <span>Сбросить</span>
                        </a>
                    </div>
                    <div class="kit_tuning_subheader">
                        <span><h4>Характеристики</h4></span>
                    </div>
                    <div class="kit_tuning_action">
                        <!-- Стартовый конфиг-->
                        <div class="kit_tuning_action_startConfig">
                            <div class="toggle-block">
                                <div class="toggle-name">Размер</div>
                                <div class="toggle-group">
                                    <?php
                                    $i=0;
                                    foreach ($size as $item) {
                                        if($i == 0) {
                                            ?>
                                            <label><input type="radio" name="size" checked
                                                          value="<?=$item->id?>"><span><?=$item->size?> см</span></label>
                                        <?php
                                        }else {
                                            ?>
                                            <label><input type="radio" name="size"
                                                          value="<?=$item->id?>"><span><?=$item->size?> см</span></label>
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="toggle-block">
                                <div class="toggle-name">Ярусы</div>
                                <div class="toggle-group">
                                    <?php
                                    $i=0;
                                    foreach ($tiers as $item) {
                                        if($i == 0) {
                                            ?>
                                            <label><input type="radio" name="level" checked
                                                          value="<?=$item->id?>"><span><?=$item->tier?></span></label>
                                            <?php
                                        }else {
                                            ?>
                                            <label><input type="radio" name="level"
                                                          value="<?=$item->id?>"><span><?=$item->tier?></span></label>
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="toggle-block">
                                <div class="toggle-name">Количество коржей в ярусах</div>
                                <div class="toggle-group">
                                    <?php
                                    $i=0;
                                    foreach ($number_of_cake as $item) {
                                        if($i == 0) {
                                            ?>
                                            <label><input type="radio" name="corn" checked
                                                          value="<?=$item->id?>"><span><?=$item->number?></span></label>
                                            <?php
                                        }else {
                                            ?>
                                            <label><input type="radio" name="corn"
                                                          value="<?=$item->id?>"><span><?=$item->number?></span></label>
                                            <?php
                                        }
                                        $i++;
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="#" id="go" type="submit" class="btn btn_one">Дальше</a>
                        </div>
                        <!-- Списки-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Блок визуальной сборки -->
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-">
            <div class="kit_action_wrp">
                <div class="kit_action_cake 2-3" style="display: none; background: url(/web/img/kit/start_screen/2-3.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;">
                    <!-- 2 ярус на 3 коржа START -->
                    <div class="two_tier">
                        <div class="level n" style=""></div>
                        <div class="level m" style=""></div>
                        <div class="level l" style=""></div>
                        <div class="level k" style=""></div>
                        <div class="level j" style=""></div>
                        <div class="level i" style=""></div>
                        <div class="level h" style=""></div>
                    </div>
                    <!-- 2 ярус на 3 коржа END -->

                    <!-- 1 ярус на 3 коржа START -->
                    <div class="one_tier">
                        <div class="level g" style=""></div>
                        <div class="level f" style=""></div>
                        <div class="level e" style=""></div>

                        <!-- 2 ярус на 2 коржа START -->
                        <!-- <div class="two_tier_2type">
                                    <div class="level d4" style="background: url(img/kit/2_tier_2type/corn/red/2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level c3" style="background: url(img/kit/2_tier_2type/stuff/arahis/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level b2" style="background: url(img/kit/2_tier_2type/cream/oily/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level a1" style="background: url(img/kit/2_tier_2type/corn/red/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                </div>-->
                        <!-- 2 ярус на 2 коржа END -->

                        <!-- 1 ярус на 2 коржа START -->
                        <div class="level d" style=""></div>
                        <div class="level c" style=""></div>
                        <div class="level b" style=""></div>
                        <div class="level a" style=""></div>
                        <!-- 1 ярус на 2 коржа END -->
                    </div>
                    <!-- 1 ярус на 3 коржа END -->

                </div>
                <div class="kit_action_cake 2-2" style="display: none;background: url(/web/img/kit/start_screen/2-2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;">
                    <!-- 2 ярус на 3 коржа START -->
                    <div class="two_tier">
                        <div class="level n" style=""></div>
                        <div class="level m" style=""></div>
                        <div class="level l" style=""></div>
                        <div class="level k" style=""></div>
                        <div class="level j" style=""></div>
                        <div class="level i" style=""></div>
                        <div class="level h" style=""></div>
                    </div>
                    <!-- 2 ярус на 3 коржа END -->

                    <!-- 1 ярус на 3 коржа START -->
                    <div class="one_tier">
                        <div class="level g" style=""></div>
                        <div class="level f" style=""></div>
                        <div class="level e" style=""></div>

                        <!-- 2 ярус на 2 коржа START -->
                        <!-- <div class="two_tier_2type">
                                    <div class="level d4" style="background: url(img/kit/2_tier_2type/corn/red/2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level c3" style="background: url(img/kit/2_tier_2type/stuff/arahis/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level b2" style="background: url(img/kit/2_tier_2type/cream/oily/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level a1" style="background: url(img/kit/2_tier_2type/corn/red/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                </div>-->
                        <!-- 2 ярус на 2 коржа END -->

                        <!-- 1 ярус на 2 коржа START -->
                        <div class="level d" style=""></div>
                        <div class="level c" style=""></div>
                        <div class="level b" style=""></div>
                        <div class="level a" style=""></div>
                        <!-- 1 ярус на 2 коржа END -->
                    </div>
                    <!-- 1 ярус на 3 коржа END -->

                </div>
                <div class="kit_action_cake 1-3" style="display: none;background: url(/web/img/kit/start_screen/1-3.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;">
                    <!-- 2 ярус на 3 коржа START -->
                    <div class="two_tier">
                        <div class="level n" style=""></div>
                        <div class="level m" style=""></div>
                        <div class="level l" style=""></div>
                        <div class="level k" style=""></div>
                        <div class="level j" style=""></div>
                        <div class="level i" style=""></div>
                        <div class="level h" style=""></div>
                    </div>
                    <!-- 2 ярус на 3 коржа END -->

                    <!-- 1 ярус на 3 коржа START -->
                    <div class="one_tier">
                        <div class="level g" style=""></div>
                        <div class="level f" style=""></div>
                        <div class="level e" style=""></div>

                        <!-- 2 ярус на 2 коржа START -->
                        <!-- <div class="two_tier_2type">
                                    <div class="level d4" style="background: url(img/kit/2_tier_2type/corn/red/2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level c3" style="background: url(img/kit/2_tier_2type/stuff/arahis/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level b2" style="background: url(img/kit/2_tier_2type/cream/oily/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level a1" style="background: url(img/kit/2_tier_2type/corn/red/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                </div>-->
                        <!-- 2 ярус на 2 коржа END -->

                        <!-- 1 ярус на 2 коржа START -->
                        <div class="level d" style=""></div>
                        <div class="level c" style=""></div>
                        <div class="level b" style=""></div>
                        <div class="level a" style=""></div>
                        <!-- 1 ярус на 2 коржа END -->
                    </div>
                    <!-- 1 ярус на 3 коржа END -->

                </div>
                <div class="kit_action_cake 1-2" style="background: url(/web/img/kit/start_screen/1-2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;">
                    <!-- 2 ярус на 3 коржа START -->
                    <div class="two_tier">
                        <div class="level n" style=""></div>
                        <div class="level m" style=""></div>
                        <div class="level l" style=""></div>
                        <div class="level k" style=""></div>
                        <div class="level j" style=""></div>
                        <div class="level i" style=""></div>
                        <div class="level h" style=""></div>
                    </div>
                    <!-- 2 ярус на 3 коржа END -->

                    <!-- 1 ярус на 3 коржа START -->
                    <div class="one_tier">
                        <div class="level g" style=""></div>
                        <div class="level f" style=""></div>
                        <div class="level e" style=""></div>

                        <!-- 2 ярус на 2 коржа START -->
                        <!-- <div class="two_tier_2type">
                                    <div class="level d4" style="background: url(img/kit/2_tier_2type/corn/red/2.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level c3" style="background: url(img/kit/2_tier_2type/stuff/arahis/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level b2" style="background: url(img/kit/2_tier_2type/cream/oily/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                    <div class="level a1" style="background: url(img/kit/2_tier_2type/corn/red/1.png) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                </div>-->
                        <!-- 2 ярус на 2 коржа END -->

                        <!-- 1 ярус на 2 коржа START -->
                        <div class="level d" style=""></div>
                        <div class="level c" style=""></div>
                        <div class="level b" style=""></div>
                        <div class="level a" style=""></div>
                        <!-- 1 ярус на 2 коржа END -->
                    </div>
                    <!-- 1 ярус на 3 коржа END -->

                </div>
            </div>
        </div>
    </div>
</div>
<?php \yii\widgets\Pjax::end(); ?>
<!--<!--Jquery plug-in-->
<!--<script src="js/jquery-3.3.1.min.js"></script>-->
<!--<script src="js/menu.js"></script>-->
<!--<script src="js/kit-interface.js"></script>-->