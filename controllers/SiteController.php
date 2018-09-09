<?php

namespace app\controllers;

use yii\captcha\CaptchaAction;
use yii\web\Controller;
use yii\web\ErrorAction;
use yii\web\ViewAction;

/**
 * @author Alexander Kononenko <contact@hauntd.me>
 * @package app\controllers
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => ErrorAction::class,
            ],
            'captcha' => [
                'class' => CaptchaAction::class,
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'page' => [
                'class' => ViewAction::class,
            ]
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
