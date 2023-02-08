<?php

namespace frontend\controllers;

use yii\web\Controller;

class CartController extends Controller
{

    public function actionIndex()
    {
        if (\Yii::$app->user->isGuest) {
            $session = new Session;
            $session->open();

        }
//        else{
//
//        }
    }

}