<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryTable */

$this->title = 'Новая категория';
$this->params['breadcrumbs'][] = ['label' => 'Админпанель', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-table-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="category-table-form">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'sort_order')->textInput() ?>

        <?= $form->field($model, 'status')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Сохранить' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
