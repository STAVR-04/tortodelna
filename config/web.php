<?php



$params = require(__DIR__ . '/params.php');

$db = require(__DIR__ . '/db.php');



$config = [

    'id' => 'basic',

    'basePath' => dirname(__DIR__),

    'bootstrap' => ['log'],

	'language' => 'ru',

    'modules' => [

        'admin' => [

            'class' => 'app\modules\admin\Module',

        ],

    ],

    'components' => [

        'request' => [

            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation

            'cookieValidationKey' => 'M3z4iODFqg1VY2-4PjQr0Xsjkg8DtRNj',

            'baseUrl'=> '',

        ],

        'cache' => [

            'class' => 'yii\caching\FileCache',

        ],

        'user' => [

            'identityClass' => 'app\models\User',

            'enableAutoLogin' => true,

        ],

        'errorHandler' => [

            'errorAction' => 'site/error',

        ],

        'mailer' => [

            'class' => 'yii\swiftmailer\Mailer',

            // send all mails to a file by default. You have to set

            // 'useFileTransport' to false and configure a transport

            // for the mailer to send real emails.

            'useFileTransport' => false,

            'transport' => [

                'class' => 'Swift_SmtpTransport',

                'host' => 'smtp.yandex.ru',

                'username' => 'aleksandr-alejnikov@yandex.ru',

                'password' => '781227xy',

                'port' => '465',

                'encryption' => 'ssl',

            ],

        ],

        'log' => [

            'traceLevel' => YII_DEBUG ? 3 : 0,

            'targets' => [

                [

                    'class' => 'yii\log\FileTarget',

                    'levels' => ['error', 'warning'],

                ],

            ],

        ],

        'db' => $db,


        'urlManager' => [

            'enablePrettyUrl' => true,

            'showScriptName' => false,

            'suffix'=>'/',

//            'rules'=>array(

//                ''=>'site/index',

//                '<action>'=>'site/<action>',

//            ),

        ],

        'authManager' => [

            'class' => 'yii\rbac\DbManager',

        ],

        

    ],

    'params' => $params,

];



if (YII_ENV_DEV) {

    // configuration adjustments for 'dev' environment

    $config['bootstrap'][] = 'debug';

    $config['modules']['debug'] = [

        'class' => 'yii\debug\Module',

        // uncomment the following to add your IP if you are not connecting from localhost.

        

    ];

    $config['modules']['debug']['allowedIPs'] = ['*'];



    $config['bootstrap'][] = 'gii';

    $config['modules']['gii'] = [

        'class' => 'yii\gii\Module',

        // uncomment the following to add your IP if you are not connecting from localhost.

        'allowedIPs' => ['*'],

    ];

}



return $config;

