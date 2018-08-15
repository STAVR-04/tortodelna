<?php

/**

 * @link http://www.yiiframework.com/

 * @copyright Copyright (c) 2008 Yii Software LLC

 * @license http://www.yiiframework.com/license/

 */



namespace app\assets;



use yii\web\AssetBundle;



/**

 * @author Qiang Xue <qiang.xue@gmail.com>

 * @since 2.0

 */

class AppAsset extends AssetBundle

{

    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [

        'css/flexboxgrid.css',

        'css/base.css',

    ];

    public $js = [
// 'js/jquery-3.3.1.min.js',
        'js/menu.js',
    ];

    public $depends = [
'yii\web\YiiAsset',
        

    ];

}
