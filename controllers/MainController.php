<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\RegForm;
use app\models\LoginForm;
use app\models\User;



class MainController extends BehaviorsController
{

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSearch($search = null)
    {
    	//$search = Yii::$app->request->post('get');

        
        
        return $this->render
        (
        	'search',
        	['search' => $search]
        );
    }

    public function actionReg()
    {
        $model = new RegForm();

        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            if($user = $model->reg())
            {
                if($user->status === User::STATUS_ACTIVE)
                {
                    if(Yii::$app->getUser()->login($user))
                    {
                       //Yii::$app->session->setFlash('success','Успешная регистрация');
                        return $this->goHome();
                    }
                }
            } 
            else
            {
                Yii::$app->session->setFlash('error','Ошибка при регистрации');
                Yii::error('Ошибка регистрации');
                return $this->refresh();
            }
        }
       
        return $this->render
        (
                'reg',
                [
                    'model' => $model
                ]
        );
    }

    public function actionLogin()
    {
        if(!Yii::$app->user->isGuest)
        {
            return $this->goHome();
        }


        $model = new LoginForm();

        if($model->load(Yii::$app->request->post()) && $model->login())
        {
            return $this->goBack();
        }

        return $this->render(
                'login',
                ['model' => $model]
            );
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->redirect(['/main/index']);
    }

}
