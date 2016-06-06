<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>


    <?php

    		echo Html::a(

    				'Передать сбда id = 123',
    				Url::to(['site/about','id' => '123'])
    			);

    		if(isset($_GET['id']))
    			echo '<p>'.$_GET['id'].'</p>';

    ?>
</div>
