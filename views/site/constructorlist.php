<?php

$this->registerCssFile('@web/css/kit.css',['depends' =>'app\assets\AppAsset']);

$this->registerJsFile('@web/js/constructor.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/jquery.cookie.js',['depends' =>'app\assets\AppAsset']);
$this->registerJsFile('@web/js/modal.js',['depends' =>'app\assets\AppAsset']);

?>

<?php \yii\widgets\Pjax::begin(['enablePushState' => false, 'timeout' => 4000]); ?>

<div class="container-fluid" id="constructor_wrp" tier="<?=$constructor['tier']?>" col="<?=$constructor['number_of_cake']?>" tek="<?=$tek?>"
retur="<?=Yii::$app->request->get('return')?>" back="<?=Yii::$app->request->get('back')?>">

    <div class="row">

        <!-- Блок характеристик -->

        <div class="col-lg-3 col-xs">

            <div class="kit_tuning_wrp">

                <div class="kit_tuning_action_left">

                    <a class="tooltips kit_tuning_return" href="<?=$url?>">

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

                        <span><h4><?=$img[0]['idType']->type?></h4></span>

                    </div>

                    <div class="kit_tuning_action">

                        <!-- Списки-->

                        <div class="kit_tuning_action_list">

                            <ul>

                                <?php
                                if ($img[0]['idType']->type!='Покрытие') {
                                    foreach ($img as $value) {

                                        ?>

                                        <li>

                                            <a class="kit_list <?php if ($i == $value->id) { ?>kit_list--active<?php } ?>"
                                               href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'id' => $value->id]) ?>"><?= $value->title ?></a>

                                            <?php

                                            if ($i == $value->id) {
                                                if (($constructor['cake'][10][3] == 'Украшение' && $constructor['cake'][10][0] != '')
                                                    || ($constructor['cake'][9][3] == 'Украшение' && $constructor['cake'][9][0] != '')
                                                    || ($constructor['cake'][6][3] == 'Украшение' && $constructor['cake'][6][0] != '')
                                                    || ($constructor['cake'][16][3] == 'Украшение' && $constructor['cake'][16][0] != '')) {
                                                    ?>


                                                    <?php
                                                } else {
                                                    ?>
                                                    <a id="<?= $tek ?>" class="btn btn_three dalshe"
                                                       href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'next' => "ok"]) ?>">Дальше

                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             preserveAspectRatio="none"

                                                             viewbox="0 0 283 53">

                                                            <path class="btn_three_layerbg"

                                                                  d="M0 0h10v53H0zm253 0H10v53h243l20-26.5z"></path>

                                                        </svg>

                                                    </a>

                                                    <?php
                                                }

                                            }

                                            ?>

                                        </li>

                                        <?php

                                    }
                                }else{
                                    ?>
                                    <?php \yii\widgets\Pjax::begin(['enablePushState' => false, 'timeout' => 4000]); ?>
                                    <li  class="kit_dropdown active" tabindex="1">
                                        <a id="kdd-one" class="kit_list" href="#">Мастика</a>
                                        <ul class="dropdown">
                                                <?php
                                                foreach ($img as $im) {
                                                    if ($im->pokr_type=='Мастика') {
                                                        ?>
                                                        <li>
                                                            <a class="kit_list kit_list2 <?php if ($i == $im->id) { ?>kit_list--active<?php } ?>"
                                                               href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'id' => $im->id]) ?>" data-pjax="1"><?= $im->title ?></a>
                                                            <?php

                                                            if ($i == $im->id) {

                                                                    ?>
                                                                    <a id="<?= $tek ?>" class="btn btn_three dalshe"
                                                                       href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'next' => "ok"]) ?>">Дальше

                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                             preserveAspectRatio="none"

                                                                             viewbox="0 0 283 53">

                                                                            <path class="btn_three_layerbg"

                                                                                  d="M0 0h10v53H0zm253 0H10v53h243l20-26.5z"></path>

                                                                        </svg>

                                                                    </a>

                                                                    <?php


                                                            }

                                                            ?>
                                                        </li>

                                                        <?php
                                                    }
                                                }
                                                ?>

                                        </ul>
                                    </li>

                                    <!------- ВЫПАДАЮЩИЙ СПИСОК 1------->
                                    <li  class="kit_dropdown active" tabindex="1">
                                        <a id="kdd-two" class="kit_list" href="#">Крема</a>
                                        <ul class="dropdown">
                                            <?php
                                            foreach ($img as $im) {
                                                if ($im->pokr_type=='Крем') {
                                                    ?>
                                                    <li>
                                                        <a class="kit_list kit_list2 <?php if ($i == $im->id) { ?>kit_list--active<?php } ?>"
                                                           href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'id' => $im->id]) ?>"><?= $im->title ?></a>
                                                        <?php

                                                        if ($i == $im->id) {
                                                            if (($constructor['cake'][10][3] == 'Украшение' && $constructor['cake'][10][0] != '')
                                                                || ($constructor['cake'][9][3] == 'Украшение' && $constructor['cake'][9][0] != '')
                                                                || ($constructor['cake'][6][3] == 'Украшение' && $constructor['cake'][6][0] != '')
                                                                || ($constructor['cake'][16][3] == 'Украшение' && $constructor['cake'][16][0] != '')) {
                                                                ?>


                                                                <?php
                                                            } else {
                                                                ?>
                                                                <a id="<?= $tek ?>" class="btn btn_three dalshe"
                                                                   href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'next' => "ok"]) ?>">Дальше

                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                         preserveAspectRatio="none"

                                                                         viewbox="0 0 283 53">

                                                                        <path class="btn_three_layerbg"

                                                                              d="M0 0h10v53H0zm253 0H10v53h243l20-26.5z"></path>

                                                                    </svg>

                                                                </a>

                                                                <?php
                                                            }

                                                        }

                                                        ?>
                                                    </li>

                                                    <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                    <?php \yii\widgets\Pjax::end(); ?>
                                <?php
                                }
                                ?>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <?php

        if($constructor['tier']==2 && $constructor['number_of_cake']==2) {

            ?>

            <!-- Блок визуальной сборки -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-">

                <div class="kit_action_wrp">

                    <div class="kit_action_process_wrp">

                        <!-- Толькот при конфиге в 2 яруса -->

                        <div class="kit_action_process_tier">

                            <div>1 ярус</div>

                            <div></div>

                            <div>2 ярус</div>

                            <div></div>

                            <div></div>

                        </div>

                        <div class="kit_action_process">

                            <div class="process_position_wrp">

                                <div class="process_position  <?php

                                if ($tek > 3) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 1 && $tek <= 3) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 1 && $tek <= 3) {

                                    ?>position_sub--active

                                                        <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 1){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 1]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 2){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 2]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 3){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 3]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 7) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 4 && $tek <= 7) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 4 && $tek <= 7) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 4){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 4]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 5){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 5]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 6){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 6]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 7){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 7]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 10) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 8 && $tek <= 10) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 8 && $tek <= 10) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 10){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 10]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 14) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 11 && $tek <= 14) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 11 && $tek <= 14) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 11){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 11]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 12){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 12]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 13){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 13]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 14){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 14]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>



                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 16) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 15 && $tek <= 16) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 15 && $tek <= 16) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 15){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 15]) ?>">Покрытие</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 16){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 16]) ?>">Украшение</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="kit_action_cake">

                        <div class="two_tier">

                            <!-- Дэкор (2-3) СТАРТ -->
                            <div class="level decor_full-config 16" style="background: url(/web<?= $constructor['cake'][16][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <!-- Дэкор (2-3) КОНЕЦ -->


                            <!-- Мастика СТАРТ -->
                            <div class="mastica 15" style="background: url(/web<?= $constructor['cake'][15][0] ?>) no-repeat top center;-webkit-background-size: contain;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <!-- Мастика СТАРТ -->

                            <div class="level n 14" style="background: url(/web<?= $constructor['cake'][14][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level m 13" style="background: url(/web<?= $constructor['cake'][13][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level l 12" style="background: url(/web<?= $constructor['cake'][12][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level k 11" style="background: url(/web<?= $constructor['cake'][11][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level j 10" style="background: url(/web<?= $constructor['cake'][10][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level i 9" style="background: url(/web<?= $constructor['cake'][9][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level h 8" style="background: url(/web<?= $constructor['cake'][8][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>


                        <div class="one_tier">

                            <div class="level g 7" style="background: url(/web<?= $constructor['cake'][7][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level f 6" style="background: url(/web<?= $constructor['cake'][6][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level e 5" style="background: url(/web<?= $constructor['cake'][5][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level d 4" style="background: url(/web<?= $constructor['cake'][4][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level c 3" style="background: url(/web<?= $constructor['cake'][3][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level b 2" style="background: url(/web<?= $constructor['cake'][2][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level a 1" style="background: url(/web<?= $constructor['cake'][1][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>

                        </div>

                    </div>



                </div>

            </div>



            <?php

        }elseif ($constructor['tier']==1 && $constructor['number_of_cake']==1){

            ?>

            <!-- Блок визуальной сборки -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-">

                <div class="kit_action_wrp">

                    <div class="kit_action_process_wrp">

                        <div class="kit_action_process">

                            <div class="process_position_wrp">

                                <div class="process_position  <?php

                                if ($tek > 4) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 1 && $tek <= 4) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 1 && $tek <= 4) {

                                    ?>position_sub--active

                                                        <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 1){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 1]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 2){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 2]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 3){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 3]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 4){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 4]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 7) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 4 && $tek <= 7) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 4 && $tek <= 7) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 4){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 4]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 5){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 5]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 6){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 6]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 7){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 7]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 10) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 8 && $tek <= 10) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 8 && $tek <= 10) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 10){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 10]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 14) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 11 && $tek <= 14) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 11 && $tek <= 14) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 11){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 11]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 12){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 12]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 13){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 13]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 14){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 14]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>



                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 6) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 5 && $tek <= 6) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 5 && $tek <= 6) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 5){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 5]) ?>">Покрытие</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 6){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 6]) ?>">Украшение</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="kit_action_cake">

                        <!-- Дэкор СТАРТ-->
                        <div class="two_tier_2type">
                            <div class="level decor a1 6" style="background: url(<?= '/web'.$constructor['cake'][6][0]?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>
                        <!-- Дэкор КОНЕЦ-->

                        <div class="one_tier">

                            <!-- Мастика СТАРТ-->
                            <div class="mastica 5" style="background: url(<?= '/web'.$constructor['cake'][5][0]?>) no-repeat top center;-webkit-background-size: contain;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <!-- Мастика КОНЕЦ-->

                            <div class="level d 4" style="background: url(<?= '/web'.$constructor['cake'][4][0]?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level c 3" style="background: url(<?= '/web'.$constructor['cake'][3][0]?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level b 2" style="background: url(<?= '/web'.$constructor['cake'][2][0]?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level a 1" style="background: url(<?= '/web'.$constructor['cake'][1][0]?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>
                    </div>

                </div>

            </div>



            <?php

        }elseif ($constructor['tier']==1 && $constructor['number_of_cake']==2){

            ?>

            <!-- Блок визуальной сборки -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-">

                <div class="kit_action_wrp">

                    <div class="kit_action_process_wrp">

                        <div class="kit_action_process">

                            <div class="process_position_wrp">

                                <div class="process_position  <?php

                                if ($tek > 3) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 1 && $tek <= 3) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 1 && $tek <= 3) {

                                    ?>position_sub--active

                                                        <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 1){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 1]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 2){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 2]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 3){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 3]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 7) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 4 && $tek <= 7) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 4 && $tek <= 7) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 4){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 4]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 5){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 5]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 6){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 6]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 7){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 7]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 10) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 8 && $tek <= 10) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 8 && $tek <= 10) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 10){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 10]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 14) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 11 && $tek <= 14) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 11 && $tek <= 14) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 11){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 11]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 12){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 12]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 13){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 13]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 14){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 14]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>



                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 9) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 8 && $tek <= 9) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 8 && $tek <= 9) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Покрытие</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Украшение</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="kit_action_cake">

                        <!-- Дэкор СТАРТ -->
                        <div class="two_tier">
                            <div class="level decor h 9" style="background: url(/web<?= $constructor['cake'][9][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>
                        <!-- Дэкор КОНЕЦ -->

                        <div class="one_tier">

                            <!-- Мастика СТАРТ -->
                            <div class="mastica 8" style="background: url(/web<?= $constructor['cake'][8][0] ?>) no-repeat top center;-webkit-background-size: contain;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <!-- Мастика КОНЕЦ -->

                            <div class="level g 7" style="background: url(/web<?= $constructor['cake'][7][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level f 6" style="background: url(/web<?= $constructor['cake'][6][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level e 5" style="background: url(/web<?= $constructor['cake'][5][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level d 4" style="background: url(/web<?= $constructor['cake'][4][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level c 3" style="background: url(/web<?= $constructor['cake'][3][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level b 2" style="background: url(/web<?= $constructor['cake'][2][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level a 1" style="background: url(/web<?= $constructor['cake'][1][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>

                        </div>
                    </div>


                </div>

            </div>



            <?php

        }elseif($constructor['tier']==2 && $constructor['number_of_cake']==1) {

            ?>

            <!-- Блок визуальной сборки -->

            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-">

                <div class="kit_action_wrp">

                    <div class="kit_action_process_wrp">

                        <!-- Толькот при конфиге в 2 яруса -->

                        <div class="kit_action_process_tier">

                            <div>1 ярус</div>

                            <div></div>

                            <div>2 ярус</div>

                            <div></div>

                            <div></div>

                        </div>

                        <div class="kit_action_process">

                            <div class="process_position_wrp">

                                <div class="process_position  <?php

                                if ($tek > 4) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 1 && $tek <= 4) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 1 && $tek <= 4) {

                                    ?>position_sub--active

                                                        <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 1){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 1]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 2){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 2]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 3){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 3]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 4){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 4]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 8) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 5 && $tek <= 8) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 5 && $tek <= 8) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 5){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 5]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 6){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 6]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 7){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 7]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 10) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 8 && $tek <= 10) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 8 && $tek <= 10) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 8){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 8]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 10){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 10]) ?>">Начинка</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                            <div class="process_position_wrp" style="display: none">

                                <div class="process_position <?php

                                if ($tek > 14) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 11 && $tek <= 14) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 11 && $tek <= 14) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 11){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 11]) ?>">Корж</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 12){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 12]) ?>">Крем</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 13){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 13]) ?>">Начинка</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 14){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 14]) ?>">Корж</a>

                                        </li>

                                    </ul>

                                </div>



                            </div>

                            <div class="process_position_wrp">

                                <div class="process_position <?php

                                if ($tek > 10) {

                                    ?>process_position--done

                                                        <?php

                                } elseif ($tek >= 9 && $tek <= 10) {

                                    echo " process_position--active";

                                }

                                ?>">

                                    <div class="process_arrow"></div>

                                </div>

                                <div class="position_sub <?php

                                if ($tek >= 9 && $tek <= 10) {

                                    ?>position_sub--active

                            <?php

                                }

                                ?>">

                                    <ul>

                                        <li <?php

                                            if ($tek >= 9){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 9]) ?>">Покрытие</a>

                                        </li>

                                        <li <?php

                                            if ($tek >= 10){

                                            ?>class="position_sub_list--active"

                                            <?php

                                            }

                                            ?>>

                                            <a href="<?= \yii\helpers\Url::to(['/site/constructorlist/', 'back' => 10]) ?>">Украшение</a>

                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="kit_action_cake">


                        <!-- Дэкор СТАРТ -->
                        <div class="two_tier">
                            <div class="level h decor 10" style="background: url(/web<?= $constructor['cake'][10][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>
                        <!-- Дэкор КОНЕЦ -->


                        <div class="one_tier">

                            <!-- Мастика СТАРТ -->
                            <div class="mastica 9" style="background: url(/web<?= $constructor['cake'][9][0] ?>) no-repeat top center;-webkit-background-size: contain;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <!-- Мастика КОНЕЦ -->

                            <div class="two_tier_2type">
                                <div class="level d4 8" style="background: url(/web<?= $constructor['cake'][8][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                <div class="level c3 7" style="background: url(/web<?= $constructor['cake'][7][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                <div class="level b2 6" style="background: url(/web<?= $constructor['cake'][6][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                                <div class="level a1 5" style="background: url(/web<?= $constructor['cake'][5][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            </div>

                            <div class="level d 4" style="background: url(/web<?= $constructor['cake'][4][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level c 3" style="background: url(/web<?= $constructor['cake'][3][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level b 2" style="background: url(/web<?= $constructor['cake'][2][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                            <div class="level a 1" style="background: url(/web<?= $constructor['cake'][1][0] ?>) no-repeat top center;-webkit-background-size: cover;-moz-background-size: contain;background-size: contain;-o-background-size: contain;"></div>
                        </div>
                    </div>


                </div>

            </div>



            <?php

        }

        ?>

        <div class="col-lg-3 col-xs">

            <div class="kit_total_wrp">

                <div class="kit_total_header">

                    <div>

                        <h3>Итого:</h3>

                    </div>

                    <div>

                        <h3><?= $korg+$krem+$nach+$pokr+$ykr?></h3>

                    </div>

                </div>

                <div class="kit_total_body">

                    <div class="kit_total_body_row">

                        <div>

                                <span class="tooltips">

                                    Коржи:

                                    <span>

                                       1 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        <br/>

                                        <br/>

                                        2 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                    </span>

                                </span>

                        </div>

                        <div><?=$korg?>р</div>

                    </div>

                    <div class="kit_total_body_row">

                        <div>

                                <span class="tooltips">

                                    Крема:

                                    <span>

                                       1 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        <br/>

                                        <br/>

                                        2 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                    </span>

                                </span>

                        </div>

                        <div><?=$krem?>р</div>

                    </div>

                    <div class="kit_total_body_row">

                        <div>

                                <span class="tooltips">

                                    Начинки:

                                    <span>

                                       1 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                         Брауни

                                        <br/>

                                        <br/>

                                        2 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                    </span>

                                </span>

                        </div>

                        <div><?=$nach?>р</div>

                    </div>

                    <div class="kit_total_body_row">

                        <div>

                                <span class="tooltips">

                                    Покрытие:

                                    <span>

                                       1 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                         Брауни

                                        <br/>

                                        <br/>

                                        2 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                    </span>

                                </span>

                        </div>

                        <div><?=$pokr?>р</div>

                    </div>

                    <div class="kit_total_body_row">

                        <div>

                                <span class="tooltips">

                                    Украшения:

                                    <span>

                                       1 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                         Брауни

                                        <br/>

                                        <br/>

                                        2 ярус:

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                        Брауни

                                        Шоколадный

                                        Ванильный

                                    </span>

                                </span>

                        </div>

                        <div><?=$ykr?>р</div>

                    </div>

                </div>

                <a href="<?=\yii\helpers\Url::to('/site/constructorlist/?basket=true')?>" class="btn btn_one
                <?php
                if (($constructor['cake'][10][3]=='Украшение' && $constructor['cake'][10][0]!='')
                || ($constructor['cake'][9][3]=='Украшение' && $constructor['cake'][9][0]!='')
                || ($constructor['cake'][6][3]=='Украшение' && $constructor['cake'][6][0]!='')
                || ($constructor['cake'][16][3]=='Украшение' && $constructor['cake'][16][0]!='')){
                ?>btn_one--active<?php }else{?> btn_one--noactive<?php }?>">Добавить в корзину</a>

            </div>

        </div>

    </div>

</div>

<?php \yii\widgets\Pjax::end(); ?>

<!--<!--Jquery plug-in-->

<!--<script src="js/jquery-3.3.1.min.js"></script>-->

<!--<script src="js/menu.js"></script>-->

<!--<script src="js/kit-interface.js"></script>-->