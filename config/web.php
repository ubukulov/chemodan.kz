<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';
$translations = require __DIR__ . '/translations.php';
$baseUrl = require __DIR__ . '/base-url.php';

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'homeUrl' => $baseUrl,
    'bootstrap' => ['log'],
    'language' => 'ru-RU',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'asdasdas',
            //'baseUrl' => ''
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
            'loginUrl' => '/site/login'
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
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
        'urlManager' => [
            'showScriptName' => false,
            'enablePrettyUrl' => true,
            'enableStrictParsing' => false,
            'rules' => [
                /* DASHBOARD */
                '/admin' => 'admin/settings',
                '/<module:(admin|rbac)>/<controller>' => '<module>/<controller>/index',
                '/<module:(admin|rbac)>/<controller>/<action>' => '<module>/<controller>/<action>',

                /* OUTSIDE */
                '' => '/home/index',
                '/logout' => 'site/logout',
                '/<action:(reg|login)>' => 'site/<action>',
                '/<controller:(contact|site)>/captcha' => '<controller>/captcha',
                '/<controller:(home|about|contact|site)>' => '<controller>/index',
                '/<controller:(page|category|article|product)>/<alias>' => '<controller>/view',
                '<controller:(ajax/feedback-ajax)>/<action:(send)>' => '<controller>/<action>',
                '<controller:(ajax/recaptcha-ajax)>/<action:(validate)>' => '<controller>/<action>',

                /* MFU Module */
                '<module:(mfuploader)>/<controller:(managers)>/<action:(filemanager|uploadmanager)>' => '<module>/<controller>/<action>',
                '<module:(mfuploader)>/<controller:(fileinfo)>' => '<module>/<controller>/index',
                '<module:(mfuploader)>/<controller:(fileinfo)>/<action:(index)>' => '<module>/<controller>/<action>',
                '<module:(mfuploader)>/<controller:(upload/local-upload|upload/s3-upload)>/<action:(send|update|delete)>' => '<module>/<controller>/<action>',
                '/<module:(mfuploader)>/<controller:(image-album|audio-album|video-album|application-album|text-album|other-album)>' => '<module>/<controller>/index',
                '/<module:(mfuploader)>/<controller:(image-album|audio-album|video-album|application-album|text-album|other-album)>/<action:(index|view|create|update|delete)>' => '<module>/<controller>/<action>',

                /*[
                    'pattern' => 'tours/<country>',
                    'route' => 'site/tours',
                    'defaults' => ['country' => '']
                ],*/
                [
                    'pattern' => 'franchise/<open>',
                    'route' => 'site/franchise',
                    'defaults' => ['open' => '']
                ],
                [
                    'pattern' => 'upload/<open>',
                    'route' => 'site/upload',
                    'defaults' => ['open' => '']
                ],
                [
                    'pattern' => 'services/<alias>',
                    'route' => 'services/services',
                    'defaults' => ['alias' => '']
                ],
                [
                    'pattern' => 'payment/<alias>',
                    'route' => 'payment/paybox',
                    'defaults' => ['alias' => '']
                ],
                [
                    'pattern' => 'offices/<alias>',
                    'route' => 'offices/offices',
                    'defaults' => ['alias' => '']
                ],
                [
                    'pattern' => '<alias>/<sub>',
                    'route' => 'page/view',
                    'defaults' => ['alias' => '', 'sub' => '']
                ],
                /*[
                    'pattern' => 'countries/<sec>',
                    'route' => 'site/countries',
                    'defaults' => ['sec' => '']
                ],*/
                [
                    'pattern' => 'booking/<sec>',
                    'route' => 'site/booking',
                    'defaults' => ['sec' => '']
                ],
                [
                    'pattern' => 'promo/<sec>',
                    'route' => 'site/promo',
                    'defaults' => ['sec' => '']
                ],
                [
                    'pattern' => 'alakol/<sec>',
                    'route' => 'site/alakol',
                    'defaults' => ['sec' => '']
                ],
                [
                    'pattern' => 'issykkul/<sec>',
                    'route' => 'site/issykkul',
                    'defaults' => ['sec' => '']
                ],
                [
                    'pattern' => 'payment/paybox',
                    'route' => 'site/payment',
                    'defaults' => ['sec' => '']
                ],
				[
                    'pattern' => 'payment/robokassa',
                    'route' => 'site/robokassa',
                    'defaults' => ['sec' => '']
                ],
                [
                    'pattern' => 'pay/<sec>',
                    'route' => 'site/paybox',
                    'defaults' => ['sec' => '']
                ],
				[
                    'pattern' => 'pay/<sec>',
                    'route' => 'site/robokassa',
                    'defaults' => ['sec' => '']
                ],
				[
                    'pattern' => 'credit/homecreditbank',
                    'route' => 'site/homecreditbank',
                    'defaults' => ['sec' => '']
                ],
				[
                    'pattern' => 'cms/sign',
                    'route' => 'site/sign',
                    'defaults' => ['sec' => '']
                ],
                '' => 'site/index',
                'confidential.html' => 'site/confidential',
                '<alias:\w+>' => 'site/<alias>',

                '' => 'site/index',
                'thanks-franchise.html' => 'site/thanks',
                '<alias:\w+>' => 'site/<alias>',

            ]
        ],
        'i18n' => [
            'translations' => $translations
        ],
        'db' => $db,
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
