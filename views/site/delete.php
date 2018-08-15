<?php
/**
 * Created by PhpStorm.
 * User: STAVR
 * Date: 21.10.2017
 * Time: 16:14
 */
use yii\helpers\Url;
echo "<h2>Страница успешно удалена!</h2>";
echo "<h3>Пожалуйста подождите пару секунда, вы будете автоматически перенаправлены обратно в личный кабинет</h3>";
 ?>
<script type="text/javascript">

    setTimeout(function(){location.replace("<?= \yii\helpers\Url::to(['site/lk']);?>")},4000);

</script>
<noscript>

    <meta http-equiv="refresh" content="5; url=<?=\yii\helpers\Url::to(['site/lk']);?>">

</noscript>

