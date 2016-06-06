<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProductTableSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Product Tables';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-table-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Новый товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
