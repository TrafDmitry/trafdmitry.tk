<?php

namespace app\controllers;

use Yii;
use yii\data\Pagination;
use app\models\ProductTable;
use app\models\CategoryTable;
use yii\helpers\Json;
use yii\web\Controller;
use app\components\Cart;



class ShopController extends Controller
{
    public $layout = 'shop';

    public function beforeAction($action) {

        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionCategory($id)
    {
        $category = CategoryTable::find()
            ->where(['id' => $id])
            ->one();

        $query = ProductTable::find()->where(['category_id' => $id])->orderBy(['id' => SORT_DESC]);
        $count = clone $query;
        $pages = new Pagination(['totalCount' => $count->count(),'pageSize' => 4]);

        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        return $this->render('category',
            [
                'models' =>$models,
                'pages' => $pages,
                'category_name' => $category,
            ]
        );
    }

    public function actionProduct($id)
    {
        $product = ProductTable::findOne($id);

        return $this->render('product',
            [
                'product' => $product,
            ]
            );
    }

    public function actionCart($id)
    {
        
        echo Json::encode($id);
       // return true;
    }

 

    
}
