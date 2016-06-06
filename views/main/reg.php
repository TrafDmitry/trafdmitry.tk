<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\RegForm */
/* @var $form ActiveForm */

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-reg">

    <h1><?= Html::encode($this->title)?></h1>
    <p>Форма входа по <a href="/main/login.html">ссылке</a></p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin(['id' => 'reg-form']); ?>

                <?= $form->field($model,'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model,'email') ?>
                <?= $form->field($model,'password')->passwordInput() ?>
                <?= $form->field($model,'password_repeat')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрация',['class' => 'btn btn-primary','name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
