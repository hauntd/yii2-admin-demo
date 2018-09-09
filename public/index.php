<?php

require(__DIR__ . '/../bootstrap.php');
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../environment.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

try {
    $config = require(__DIR__ . '/../config/web.php');
    $application = new yii\web\Application($config);
    $application->run();
} catch (\yii\base\InvalidConfigException $e) {
    dd($e);
}
