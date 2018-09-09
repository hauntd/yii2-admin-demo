<?php

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;

/**
 * @author Alexander Kononenko <contact@hauntd.me>
 * @package app\assets
 */
class DemoAsset extends AssetBundle
{
    public $depends = [
        YiiAsset::class,
    ];
}
