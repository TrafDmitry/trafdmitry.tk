<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'layout' => 'site-layout',
    'defaultRoute' => 'main/index',
    'language' => 'ru_Ru',
    'charset' => 'UTF-8',
    'name' => 'Сайт-портфолио',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => '7zyXHnJnpkoWSzJpPTKNaIJZzEKc_bih',
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
            'useFileTransport' => true,
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
        'db' => require(__DIR__ . '/db.php'),
       'db2' => require (__DIR__. '/db2.php'),

        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => true,
            'rules' => [
                [
                    'pattern' => '',
                    'route'   => 'main/index',
                    'suffix'  => ''
                ],
                [
                    'pattern' => '<controller>/<action>/<id:\d+>',
                    'route'   => '<controller>/<action>',
                    'suffix'  => ''
                ],
                [
                    'pattern' => '<controller>/<action>',
                    'route'   => '<controller>/<action>',
                    'suffix'  => '.html'
                ],
                [
                    'pattern' => '<module>/<controller>/<action>/<id:\d+>',
                    'route'   => '<module>/<controller>/<action>',
                    'suffix'  => ''
                ],
                [
                    'pattern' => '<module>/<controller>/<action>',
                    'route'   => '<module>/<controller>/<action>',
                    'suffix'  => '.html'
                ],
            ]
        ],
        
    ],
    'params' => $params,
];

   if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;