<?php

namespace frontend\controllers;

use common\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\HttpException;

class ProfileController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'update-address', 'update-account'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions'=>['profile'],
                        'allow'=>true,
                        'roles'=>['@'],
                    ],
                ],
            ]
        ];
    }

    /**
     * View Profile
     *
     * @return mixed
     */
    public function actionIndex()
    {

        /** @var User $user */

        $user = Yii::$app->user->identity;

        $userAddresses = $user->addresses;
        $userAddress = $user->getAddress();
        if (!empty($userAddresses)) {
            $userAddress = $userAddresses[0];
        }

        return $this->render('index', [
            'user' => $user,
            'userAddress' => $userAddress
        ]);
    }

    public function actionUpdateAddress(){

        if(!Yii::$app->request->isAjax){
            throw new ForbiddenHttpException("Only Ajax calls are allowed in this form");
        }

        $user = Yii::$app->user->identity;
        $userAddress = $user->getAddress();
        if($userAddress->load(Yii::$app->request->post()) && $userAddress->save()){
            Yii::$app->session->setFlash('success', "Address records updated");
        }
        return $this->renderAjax('user_address',[
            'userAddress' => $userAddress,
        ]);

    }


    public function actionUpdateAccount(){

        if(!Yii::$app->request->isAjax){
            throw new ForbiddenHttpException("Only Ajax calls are allowed in this form");
        }

        $user = Yii::$app->user->identity;
        if($user->load(Yii::$app->request->post()) && $user->save()){
            Yii::$app->session->setFlash('success', "Account records updated");
        }
        return $this->renderAjax('user_account',[
            'user' => $user,
        ]);

    }


}