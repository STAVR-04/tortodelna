<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 21.10.2017
 * Time: 16:14
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
echo "<h1>список постов</h1>";
foreach ($post as $pos){
 ?>
<h3><?= $pos->title ?></h3>
<img src="<?= $pos->img ?>" style="width: 300px;"/>
<p><?= $pos->text ?></p>
<p>Автор:<?= $pos->user_name ?></p>
    <a class="btn btn-primary" href="<?=\yii\helpers\Url::to(['site/view','id'=>$pos->id]) ?>">Подробнее</a>
    <hr><br>
    <br>
    <br>
    <br>

<?php }?>



