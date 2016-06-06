<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ProductTable */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Админпанель', 'url' => ['/admin/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-table-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'category_id',
            'code',
            'price',
            'availability',
            'brand',
            'description:ntext',
            'is_new',
            'is_recomended',
            'status',
        ],
    ]) ?>

    <?= Html::img($model['image'],['class' => 'image']);?>
</div>
