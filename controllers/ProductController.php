<?php

namespace app\controllers;

use Yii;
use app\models\ProductTable;
use app\models\ProductTableSearch;
use yii\base\Behavior;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * ProductController implements the CRUD actions for ProductTable model.
 */
class ProductController extends BehaviorsController
{
    /**
     * @inheritdoc
     */

    private $_noImage = '/images/products/no-image.png';

    public function behaviors()
    {
        return [
        'access' => [
            'class' => AccessControl::className(),
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ]
        ]
    ];
    }

    /**
     * Lists all ProductTable models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductTableSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductTable model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);

        if(!$model['image'])
        {
            $model['image'] = $this->_noImage;
        }

        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new ProductTable model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductTable();

        if ($model->load(Yii::$app->request->post()))
        {

            $model->save();
            $imageName = $model->id;


            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs( 'images/products/'.$imageName.'.'.$model->file->extension );

            $model->image = '/images/products/'.$imageName.'.'.$model->file->extension;

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }
        else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProductTable model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(!$model['image'])
        {
            $model['image'] = $this->_noImage;
        }

        if ($model->load(Yii::$app->request->post()))
        {
            $imageName = $model->id;


            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs( 'images/products/'.$imageName.'.'.$model->file->extension );

            $model->image = '/images/products/'.$imageName.'.'.$model->file->extension;

            $model->save();

            return $this->redirect(['view', 'id' => $model->id]);
        }
        else
        {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProductTable model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['/admin/index']);
    }

    /**
     * Finds the ProductTable model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductTable the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductTable::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
