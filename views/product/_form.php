<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\CategoryTable;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\ProductTable */
/* @var $form yii\widgets\ActiveForm */
/**
 * @var $category_model array
 */
?>

<div class="product-table-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php

    $category_model = CategoryTable::getAll();
    $items = ArrayHelper::map($category_model,'id','name');

    echo $form->field($model, 'category_id')->dropDownList($items);
    ?>

    <?= $form->field($model, 'code')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'availability')->textInput() ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?php


        echo  Html::img($model['image'], ['class' => 'image']);

    ?>

    <?= $form->field($model,'file')->fileInput(); ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'is_new')->textInput() ?>

    <?= $form->field($model, 'is_recomended')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Редактировать', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
