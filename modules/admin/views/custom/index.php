<?php

use hauntd\admin\helpers\Colors;
use hauntd\admin\helpers\Icons;
use hauntd\admin\widgets\TrendMetric;
use hauntd\admin\widgets\ProgressMetric;
use hauntd\admin\widgets\CompactMetric;
use yii\helpers\Url;

?>
<div class="page-header">
    <h1 class="page-title">
        Custom Controller
    </h1>
</div>

<p>Trend metrics:</p>
<div class="row row-deck">
    <?= TrendMetric::widget([
        'title' => 123,
        'subTitle' => 'Items',
        'trend' => '5%',
        'trendPositive' => true,
    ]) ?>
    <?= TrendMetric::widget([
        'title' => '$27.5K',
        'subTitle' => 'Net profit',
        'trend' => '12%',
        'trendPositive' => true,
    ]) ?>
    <?= TrendMetric::widget([
        'title' => 500000,
        'subTitle' => 'Items',
        'trend' => '50%',
        'trendPositive' => false,
    ]) ?>
    <?= TrendMetric::widget([
        'title' => 55555,
        'subTitle' => 'Another items',
        'trend' => '50%',
        'trendPositive' => false,
    ]) ?>
</div>

<p>Progress metrics:</p>
<div class="row row-deck">
    <?= ProgressMetric::widget([
        'title' => 123,
        'subTitle' => 'Items',
        'progressValue' => 15,
        'progressMax' => 100,
        'progressColor' => Colors::COLOR_LIME,
    ]) ?>
    <?= ProgressMetric::widget([
        'title' => '$55',
        'subTitle' => 'Paid orders',
        'progressValue' => 55,
        'progressMax' => 123,
        'progressColor' => Colors::COLOR_INDIGO,
    ]) ?>
    <?= ProgressMetric::widget([
        'title' => '75',
        'subTitle' => 'Needed parts',
        'progressValue' => 75,
        'progressMax' => 100,
        'progressColor' => Colors::COLOR_ORANGE,
    ]) ?>
    <?= ProgressMetric::widget([
        'title' => '😍',
        'subTitle' => 'Happy clients',
        'progressValue' => 29000,
        'progressMax' => 32000,
        'progressColor' => Colors::COLOR_PINK,
    ]) ?>
</div>

<p>Compact metrics:</p>
<div class="row row-deck">
    <?= CompactMetric::widget([
        'title' => '132 Sales',
        'subTitle' => '12 waiting payments',
        'url' => Url::to(['custom/index']),
        'icon' => Icons::fe('dollar-sign'),
        'iconColor' => Colors::COLOR_BLUE,
    ]) ?>
    <?= CompactMetric::widget([
        'title' => '99 Orders',
        'subTitle' => '75 shipped',
        'url' => Url::to(['custom/index']),
        'icon' => Icons::fe('shopping-cart'),
        'iconColor' => Colors::COLOR_GREEN,
    ]) ?>
    <?= CompactMetric::widget([
        'title' => '2,300 Users',
        'subTitle' => '705 online',
        'url' => Url::to(['custom/index']),
        'icon' => Icons::fe('users'),
        'iconColor' => Colors::COLOR_AZURE,
    ]) ?>
    <?= CompactMetric::widget([
        'title' => '150 Comments',
        'subTitle' => '23 to verify',
        'url' => Url::to(['custom/index']),
        'icon' => Icons::fe('message-circle'),
        'iconColor' => Colors::COLOR_ORANGE,
    ]) ?>
</div>
