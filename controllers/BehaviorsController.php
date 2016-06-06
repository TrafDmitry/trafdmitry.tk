<?php

namespace app\controllers;

use Yii;
use yii\base\Exception;
use yii\web\Controller;
use yii\filters\AccessControl;


class BehaviorsController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                /*'denyCallback' => function ($rule,$action)
                {
                  throw new Exception('Нет доступа.');
                },*/
                'rules' => [
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['reg','login'],
                        'verbs' => ['GET','POST'],
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['logout'],
                        'verbs' => ['POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'actions' => ['index','search']
                    ],
                    
                ]
            ]
        ];
    }
}