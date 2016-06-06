<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\LoginForm */
/* @var $form ActiveForm */

$this->title = 'Вход на сайт';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCss('.breadcrumbs{
    margin-top: 60px !important;
}');
?>
<div class="site-login">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Вход,регистрация по <a href="/main/reg.html">ссылке</a></p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model,'username')->textInput(['autofocus' => true])?>
                <?= $form->field($model,'password')->passwordInput()?>
                <?= $form->field($model,'rememberMe')->checkbox()?>

                <div class="form-group">
                    <?= Html::submitButton('Войти',['class' => 'btn btn-primary','name' => 'login-button'])?>
                </div>

            <?php $form = ActiveForm::end(); ?>
        </div>
    </div>
</div>













