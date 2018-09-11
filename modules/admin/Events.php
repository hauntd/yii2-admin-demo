<?php

namespace app\modules\admin;

use hauntd\admin\widgets\Sidebar;
use hauntd\admin\widgets\sidebar\LinkSidebarItem;
use yii\base\Event;
use yii\base\WidgetEvent;
use yii\helpers\Url;

/**
 * @author Alexander Kononenko <contact@hauntd.me>
 * @package app\modules\admin
 */
class Events
{
    public static function setup()
    {
        Event::on(Sidebar::class, Sidebar::EVENT_BEFORE_RUN, function(WidgetEvent $event) {
            /** @var Sidebar $sidebar */
            $sidebar = $event->sender;

            $sidebar->addItem(new LinkSidebarItem([
                'label' => 'Custom',
                'url' => Url::to(['custom/index']),
                'icon' => 'user',
                'badge' => 'new',
                'badgeActiveClass' => 'danger',
            ]));
        });

    }
}
