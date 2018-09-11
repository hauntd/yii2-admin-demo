<?php

use yii\helpers\ArrayHelper;

$core = require(__DIR__ . '/core.php');

$config = [
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
    ],
    'modules' => [
        'admin' => [
            'class' => hauntd\admin\Module::class,
            'controllerMap' => [
                'custom' => app\modules\admin\controllers\CustomController::class,
            ],
            'resourcesPath' => '@app/resources',
            'resources' => [

            ],
            'on ' . hauntd\admin\Module::EVENT_AFTER_INIT => [app\modules\admin\Events::class, 'setup'],
        ],
    ],
    'components' => [
        'assetManager' => [
            'forceCopy' => env('APP_DEBUG'),
            'appendTimestamp' => true,
            'basePath' => '@webroot/content/assets',
            'baseUrl' => '@web/content/assets',
        ],
        'cache' => [
            'class' => yii\caching\FileCache::class,
        ],
        'request' => [
            'cookieValidationKey' => env('APP_COOKIE_VALIDATION_KEY'),
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => yii\log\FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'user' => [
            'identityClass' => app\models\User::class,
            'enableAutoLogin' => true,
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require(__DIR__ . '/routes.php'),
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => yii\debug\Module::class,
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => yii\gii\Module::class,
        'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

$config = ArrayHelper::merge($core, $config);

return $config;
