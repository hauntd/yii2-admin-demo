<?php

namespace app\modules\admin\controllers;

use hauntd\admin\components\Controller;

/**
 * @author Alexander Kononenko <contact@hauntd.me>
 * @package app\modules\admin\controllers
 */
class CustomController extends Controller
{
    public function init()
    {
        parent::init();
        $this->setViewPath('@app/modules/admin/views/custom');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
