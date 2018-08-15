<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 21.10.2017
 * Time: 16:14
 */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
echo "<h2>страница поста</h2>";
 ?>
<h3><?= $post->title ?></h3>
<img src="<?= $post->img ?>" style="width: 300px;"/>
<p><?= $post->text ?></p>
<p>Автор:<?= $post->user_name ?></p>



