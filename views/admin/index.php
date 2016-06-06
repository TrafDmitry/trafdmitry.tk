<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoryTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCssFile('@web/css/main_style.css');

$this->title = 'Админпанель';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= Html::encode($this->title) ?></h1>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="panel-group" id="according">
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h3 class="panel-title">
                            <a href="#collapse-1" data-toggle="collapse">Создать материал</a>
                        </h3>

                    </div>
                    <div id="collapse-1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <?= Html::a('Создать категорию', ['create'], ['class' => 'btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                        <div class="panel-body">
                            <?= Html::a('Добавить товар', ['/product/create'], ['class' => 'btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h3 class="panel-title">
                            <a href="#collapse-2" data-toggle="collapse">Сдесь,может быть поиск</a>
                        </h3>

                    </div>
                    <div id="collapse-2" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?= Html::a('Создать категорию', ['create'], ['class' => 'disabled btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                        <div class="panel-body">
                            <?= Html::a('Добавить товар', ['/product/create'], ['class' => 'disabled btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">

                        <h3 class="panel-title">
                            <a href="#collapse-3" data-toggle="collapse">Сдесь может еще что-нибудь</a>
                        </h3>

                    </div>
                    <div id="collapse-3" class="panel-collapse collapse">
                        <div class="panel-body">
                            <?= Html::a('Создать категорию', ['create'], ['class' => 'disabled btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                        <div class="panel-body">
                            <?= Html::a('Добавить товар', ['/product/create'], ['class' => 'disabled btn btn-default btn-lg btn-group-justified']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="tabs">

                <ul class="nav nav-tabs">
                    <li ><a href="#tab-1" data-toggle="tab">Просмотр котегории</a></li>
                    <li class="active"><a href="#tab-2" data-toggle="tab">Просмотр товаров</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade " id="tab-1">

                        <div class="category-table-index">

                            <br>
                            <br>

                            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                            <?= GridView::widget([
                                'dataProvider' => $dataProvider,
                                'filterModel' => $searchModel,
                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //'id',
                                    'name',
                                    'sort_order',
                                    'status',

                                    ['class' => 'yii\grid\ActionColumn'],
                                ],
                            ]); ?>
                        </div>
                    </div>

                    <div class="tab-pane fade in active" id="tab-2">
                        <div class="product-table-index">

                            <br>
                            <br>

                            


                            <?= GridView::widget([
                                'dataProvider' => $productDataProvider,
                                'filterModel' => $productSearchModel,


                                'columns' => [
                                    ['class' => 'yii\grid\SerialColumn'],

                                    //'id',
                                    'name',
                                    'category_id',
                                    'code',
                                    'price',
                                    // 'availability',
                                    'brand',
                                    // 'description:ntext',
                                    // 'is_new',
                                    // 'is_recomended',
                                    // 'status',

                                    [
                                        'class' => 'yii\grid\ActionColumn',
                                        'header'=>'Действия',
                                        'headerOptions' => ['width' => '80'],
                                        'template' => '{view} {update} {delete}{product}',
                                        'controller' => 'product',
                                    ],
                                ],
                            ]); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


   
