<?php

use app\assets\AppAsset;
use app\components\AlertWidget;
use yii\bootstrap\NavBar;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);

$this->beginPage();
 //$this->registerJsFile('@web/js/some_function.js',['position' => $this::POS_HEAD],'test_f');

$this->registerCssFile('@web/css/main_style.css');

?>



<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html lang="<?= Yii::$app->language; ?>"  xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?= Html::csrfMetaTags(); ?>
	<meta charset="<?= Yii::$app->charset; ?>">
	<?php $this->registerMetaTag(['name' => 'viewport','content' => 'width = device-width,initial-scale=1','user-scalable=on']); ?>
	<title><?= Yii::$app->name; ?></title>
	<?php $this->head(); ?>
</head>

<body>
	<?php $this->beginBody(); ?>

		<div class="wrap">
			<?php

				NavBar::begin(
						[
							'brandLabel' => 'Сайт портфолио',
							'options' => [
								'class' => 'navbar-inverse navbar-fixed-top',
							],
						]
					);


				ActiveForm::begin([
					'action' => ['main/search'],
					'method' => 'get',
					'options' =>
						[
							'class' => 'navbar-form navbar-right'
						]
					]);

				echo '<div class="input-group input-group-sm">';

				echo Html::input(
					'type: text',
					'search',
					'',
						[
							'placeholder' => 'Пока недоступно',
							'class' => 'form-control'
						]

					);

				echo '<span class="input-group-btn">';
				echo Html::submitButton(
					'<span class="glyphicon glyphicon-search"></span>',
						[
							'class' => 'btn btn-success'
						]

					);

				echo '</span></div>';

				ActiveForm::end();


				$menuItems = [

					[
						'label' => 'Главная <span class="glyphicon glyphicon-home"></span>',
						'url' => ['/main/index']
					],

					[
						'label' => 'Разное <span class="glyphicon glyphicon-inbox"></span>',
						'items' =>[
							'<li class="dropdown-header">Интересные страници</li>',

							'<li class="divider"></li>',

							[
								'label' => 'Расчет пули',
								'url' => ['/widget-test/index']
							],
							[
								'label' => 'Работа с GoogleApi',
								'url' => ['/widget-test/api']
							]
						]
					],

					[
						'label' => 'О проекте <span class="glyphicon glyphicon-question-sign"></span>',
						'url' => ['#'],
						'linkOptions' =>[
							'data-toggle' => 'modal',
							'data-target' => '#modal',
							'style' => 'cursor: pointer; outline: none;'
						],
					],
				];

				if(Yii::$app->user->isGuest)
				{
					$menuItems[] = [

							'label' => 'Регистрация <span class="glyphicon glyphicon-user"></span>',
							'url' => ['/main/reg']
						];
					$menuItems[] = [
							'label' => 'Войти <span class="glyphicon glyphicon-log-in"></span>',
							'url' => ['/main/login']
						];

				}
				else
				{
					$menuItems[] = [
						'label' => 'Выйти('.Yii::$app->user->identity['username'].') <span class="glyphicon glyphicon-log-out"></span>',
						'url' => ['/main/logout'],
						'linkOptions' => ['data-method' => 'post']
					];
				}

				echo Nav::widget([
					'items' => $menuItems,
						  'encodeLabels' => false,
						  'options' => [

						  			'class' => 'navbar-nav navbar-right'

						        ]	

					]);

				NavBar::end();


				Modal::begin([
					'header' => '<h2>TD</h2>',
					'id' => 'modal',
					'closeButton' => ['tag' => 'button', 'label' => '&times;'],
				]);

				echo 'Пока не придумал что сдесь будет.';

				Modal::end();
			?>

			<div class="container-fluid">

				<div class="top">
					<?= Breadcrumbs::widget([
						'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],

					])?>
				</div>

				<?= AlertWidget::widget() ?>

				<?= $content; ?>
			</div>

		</div>

		<footer class="footer">
			<div class="container">
				<span class="badge">
					<span class="glyphicon glyphicon-copyright-mark"></span>TD<?= date('Y'); ?>
				</span>
			</div>
		</footer>

	<?php $this->endBody(); ?>
</body>
</html>

<?php
		$this->endPage();
?>