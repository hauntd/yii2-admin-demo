<?php

$config = [
    'id' => 'yii2-admin-demo',
    'name' => 'Admin Demo App',
    'language' => 'en-US',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap' => [],
    'modules' => [],
    'components' => [
        'i18n' => [
            'translations' => [
                '*' => [
                    'class' => yii\i18n\PhpMessageSource::class,
                    'basePath' => '@app/messages',
                    'sourceLanguage' => 'en',
                ],
            ],
        ],
    ],
    'params' => require(__DIR__ . '/params.php'),
];

return $config;
