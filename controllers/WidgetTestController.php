<?php

namespace app\controllers;

use Yii;

class WidgetTestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');

        #Пример для скачивания файла

        //return Yii::$app->response->sendFile('some.txt')->send();

        #Пример передачи управления другому Контроллеру
        
        /*$search_some = 'примеры';

        return $this->redirect(
        		[
        			'main/search',
        			'search' => $search_some
        		]
        	);*/
    }

    
    
    public function actionApi()
    {
        return $this->render('api');
    }

  

}
