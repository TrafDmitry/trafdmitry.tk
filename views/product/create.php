<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ProductTable 
    @var $category_model array   */

$this->title = 'Добавление товара';
$this->params['breadcrumbs'][] = ['label' => 'Админпанель', 'url' => ['/admin/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
