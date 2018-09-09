<?php

use yii\helpers\ArrayHelper;

Yii::setAlias('@webroot', dirname(__DIR__) . '/../public');

$db = require(__DIR__ . '/db.php');
$core = require(__DIR__ . '/core.php');

$config = [
    'id' => 'yii2-admin-demo-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => [
        'log',
    ],
    'controllerNamespace' => 'app\commands',
    'modules' => [],
    'components' => [
        'db' => $db,
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

$config = ArrayHelper::merge(require(__DIR__ . '/core.php'), $config);

return $config;
