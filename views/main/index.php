<?php
/* @var $this yii\web\View */

// Если нужно подключить js или css файлы только к одному представлению
// например к view/main/index.php,то используется: registerJsFile,registerCssFile
// $this->registerJsFile('@web/js/main.js',['position' => $this->POS_HEAD],'main-index')



//Для того чтобы подключать js css блоки: registerJs,registerCss
//Пример:

//$this->registerJs('alert("Hello")',$this::POS_READY);
//$this->registerCss('body{background-color:#ff0;}');

// Для того чтобы использовать любой виджет его нужно подключить
use app\components\TestWidget;
use app\components\SecondWidget;
use yii\bootstrap\Modal;
use yii\helpers\Html;

//$this->registerJsFile('@web/js/screen.js',['position' => $this::POS_HEAD],'some-func');


?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="200000">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" ></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2" ></li>
    </ol>
<div class="row">
    <div class="carousel-inner">
        <div class="item">
            <img src="/images/slaider/slide1.jpg" alt="first_slide">
        </div>
        <div class="item active" >
            <img src="/images/slaider/slide2.jpg" alt="first_slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Заголовок статьи</h1>
                    <p>
                        Краткое описаение статьи
                    </p>
                    <p>
                        <a href="#" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-hand-up"></span>&nbsp;Подробнее...</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="item" >
            <img src="/images/slaider/slide3.jpg" alt="first_slide">
        </div>
    </div>

        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#myCarousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
   </div>
</div>
<div class="container marketing">
    <div class="row">
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-briefcase center-icon"></span>
            <h2>Интернет магазин</h2>
            <p>
                Пример интернет магазина
            </p>
            <p>
                <a href="/shop/index.html" class="btn btn-default"><span class="glyphicon glyphicon-hand-up"></span>&nbsp;Подробнее...</a>
            </p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-question-sign center-icon"></span>
            <h2>Заголовок статьи</h2>
            <p>
                Сдесь будет краткое описиние статьи,или ссылка на какую-нибудь интересную страницу
            </p>
            <p>
                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-hand-up"></span>&nbsp;Подробнее...</a>
            </p>
        </div>
        <div class="col-sm-4">
            <span class="glyphicon glyphicon-question-sign center-icon"></span>
            <h2>Заголовок статьи</h2>
            <p>
                Сдесь будет краткое описиние статьи,или ссылка на какую-нибудь интересную страницу
            </p>
            <p>
                <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-hand-up"></span>&nbsp;Подробнее...</a>
            </p>
        </div>
    </div>
</div>






