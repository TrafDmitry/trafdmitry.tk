<?php


/**
 * @var $content string
 * @var $category_list array
 */
use yii\helpers\Html;
use app\models\CategoryTable;
use app\models\RegForm;
use yii\bootstrap\ActiveForm;

$this->title = "Шаблон магазина";


?>

<!DOCTYPE html>
<html lang="<?=Yii::$app->language?>">
<head>
    <?= Html::csrfMetaTags(); ?>
    <meta charset="<?= Yii::$app->charset; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400italic,400' rel='stylesheet' type='text/css'>
    <!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'> -->
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/shop_resource/css/bootstrap.css">
    <link rel="stylesheet" href="/shop_resource/css/font-awesome.css">
    <link rel="stylesheet" href="/shop_resource/css/styles.css">
    <link rel="stylesheet" href="/shop_resource/css/mystyles.css">
    <title><?= $this->title ?></title>
</head>
<body>




<div class="global-wrapper clearfix" id="global-wrapper">
    <div class="navbar-before mobile-hidden">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="navbar-before-sign"><i class="fa fa-phone">&nbsp;&nbsp;(093)699-28-68</i>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope">&nbsp;&nbsp;trafdmitry@gmail.com</i></p>
                </div>
                <div class="col-md-6">
                    <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                        <?php if(Yii::$app->user->isGuest):?>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Корзина</a>
                            </li>
                            <li><a href="/main/login.html"><i class="fa fa-lock"></i>&nbsp;&nbsp;Вход</a>
                            <li><a href="/main/index.html"><i class="fa fa-home"></i>&nbsp;&nbsp;На главную</a>
                        <?php else:?>
                            <li><a href="/main/index.html"><i class="fa fa-home"></i>&nbsp;&nbsp;На главную</a>
                            <li><a href="#"><i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;Корзина</a>
                            <li><a href="/admin/index.html"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;Админ Вход</a>
                        <?php endif;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <?php
        $model = new RegForm();
    ?>
    
    <div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
        <h3 class="widget-title">Форма регистрации</h3>
        <p>Все поля обязательны</p>
        <hr />

                <?php


                    $form = ActiveForm::begin(['id' => 'reg-form']);

                ?>

                <?= $form->field($model,'username')->textInput(['autofocus' => true]) ?>
                <?= $form->field($model,'email') ?>
                <?= $form->field($model,'password')->passwordInput() ?>
                <?= $form->field($model,'password_repeat')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрация',['class' => 'btn btn-primary','name' => 'signup-button']) ?>
                </div>

                <?php ActiveForm::end(); ?>
      

    </div>



    <nav class="navbar navbar-inverse navbar-main yamm">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </button>
                <a href="/shop/index.html" class="navbar-brand">
                    <i class="fa fa-anchor logo_item">&nbsp;LoGo</i>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Категории товаров<i class="drop-caret" data-toggle="dropdown"></i></a>
                        <ul class="dropdown-menu dropdown-menu-category">

                            <?php

                            $category_model = CategoryTable::getAll();

                            foreach ($category_model as $category_list ):

                            ?>

                            <li>
                                <a href="/shop/category/<?= $category_list['id']?>">
                                    <i class="fa fa-diamond dropdown-menu-category-icon"></i>
                                    <?= $category_list['name']?>
                                </a>
                            </li>

                            <?php endforeach;?>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#">Меню сайта<i class="drop-caret" data-toggle="dropdown"></i></a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left navbar-main-search" role="search">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Поиск.." />
                    </div>
                    <a class="fa fa-search navbar-main-search-submit" href="#"></a>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#nav-login-dialog" data-effect="mfp-move-from-top" class="popup-text">Что-нибудь</a>
                    </li>
                    <li>
                        <a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Регистрация</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?=$content;?>

    <footer class="main-footer">
        <div class="container">
            <div class="row row-col-gap" data-gutter="60">
                <div class="col-md-3">
                    <h4 class="widget-title-sm">Site Portfolio</h4>
                    <p>
                        <a href="http://html-template.ru/biznes/item/548-shablony-sajtov-internet-magazinov">This is Html tameplate of TheBox Shop</a>
                    </p>
                    <ul class="main-footer-social-list">
                        <li>
                            <a class="fa fa-facebook" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-pinterest" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="#"></a>
                        </li>
                        <li>
                            <a class="fa fa-google-plus" href="#"></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="widget-title-sm">Popular Tags</h4>
                    <ul class="main-footer-tag-list">
                        <li><a href="#">New Season</a>
                        </li>
                        <li><a href="#">Watches</a>
                        </li>
                        <li><a href="#">woman</a>
                        </li>
                        <li><a href="#">classic</a>
                        </li>
                        <li><a href="#">modern</a>
                        </li>
                        <li><a href="#">blue</a>
                        </li>
                        <li><a href="#">shoes</a>
                        </li>
                        <li><a href="#">running</a>
                        </li>
                        <li><a href="#">jeans</a>
                        </li>
                        <li><a href="#">sports</a>
                        </li>
                        <li><a href="#">laptops</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h4 class="widget-title-sm">Почта</h4>
                    <form>
                        <div class="form-group">
                            <label>Получать инфрмацию о новинках</label>
                            <input class="newsletter-input form-control" placeholder="E-mail" type="text" />
                        </div>
                        <input class="btn btn-primary" type="submit" value="Sign up" />
                    </form>
                </div>
            </div>
            <ul class="main-footer-links-list">
                <li><a href="#">About Us</a>
                </li>
                <li><a href="#">Jobs</a>
                </li>
                <li><a href="#">Legal</a>
                </li>
                <li><a href="#">Support & Customer Service</a>
                </li>
                <li><a href="#">Blog</a>
                </li>
                <li><a href="#">Privacy</a>
                </li>
                <li><a href="#">Terms</a>
                </li>
                <li><a href="#">Press</a>
                </li>
                <li><a href="#">Shipping</a>
                </li>
                <li><a href="#">Payments & Refunds</a>
                </li>
            </ul>
            <img class="main-footer-img" src="/shop_resource/img/test_footer2-i.png" alt="Image Alternative text" title="Image Title" />
        </div>
    </footer>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="copyright-text">Copyright &copy; <?= date('Y'); ?> Designed by TheBox.Trofimenko Dmitry sklepal</p>
                </div>
                <div class="col-md-6">
                    <ul class="payment-icons-list">
                        <li>
                            <img src="/shop_resource/img/payment/visa-straight-32px.png" alt="Image Alternative text" title="Pay with Visa" />
                        </li>
                        <li>
                            <img src="/shop_resource/img/payment/mastercard-straight-32px.png" alt="Image Alternative text" title="Pay with Mastercard" />
                        </li>
                        <li>
                            <img src="/shop_resource/img/payment/paypal-straight-32px.png" alt="Image Alternative text" title="Pay with Paypal" />
                        </li>
                        <li>
                            <img src="/shop_resource/img/payment/visa-electron-straight-32px.png" alt="Image Alternative text" title="Pay with Visa-electron" />
                        </li>
                        <li>
                            <img src="/shop_resource/img/payment/maestro-straight-32px.png" alt="Image Alternative text" title="Pay with Maestro" />
                        </li>
                        <li>
                            <img src="/shop_resource/img/payment/discover-straight-32px.png" alt="Image Alternative text" title="Pay with Discover" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



    <script src="/shop_resource/js/jquery.js"></script>
    <script src="/shop_resource/js/bootstrap.js"></script>
    <script src="/shop_resource/js/icheck.js"></script>
    <script src="/shop_resource/js/ionrangeslider.js"></script>
    <script src="/shop_resource/js/jqzoom.js"></script>
    <script src="/shop_resource/js/card-payment.js"></script>
    <script src="/shop_resource/js/owl-carousel.js"></script>
    <script src="/shop_resource/js/magnific.js"></script>
    <script src="/shop_resource/js/custom.js"></script>

<script>

        $(document).ready(function () {
            $(".add-to-cart").click(function () {
                var id = $(this).attr("data-id");
                $.ajax({
                    type:"POST",
                    url:"/shop/cart/" + id,
                    dataType:"json",
                    success:function (data) {
                        console.log(data);
                    }
                });
            });
        });

</script>


</body>
</html>