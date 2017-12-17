<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.12.2017
 * Time: 22:10
 */

namespace app\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;

class UserController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['login', 'logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['login', 'signup'],
                        'roles' => ['?'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['logout'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionLogin()
    {
        return $this->render('login');
    }
}