<?php
/* @var $this yii\web\View
 * @var $products array
 */


use app\models\ProductTable;

?>
<div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
    <div class="owl-item">
        <div class="slider-item" style="background-color:#3D3D3D;">
            <div class="container">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-left slider-item-caption-white">
                        <h4 class="slider-item-caption-title">Ноутбук Aspire one 150$ в месяц</h4>
                        <p class="slider-item-caption-desc">Только сейчас ноутбук за 150$ в мес. на 10 лет с горантией 2 года.</p>
                        <a class="btn btn-lg btn-ghost btn-white" href="#">
                            <i class="fa fa-thumbs-up" ></i>
                            В корзину
                        </a>
                    </div>
                    <img class="slider-item-img-right" src="/shop_resource/img/test_slider/1-i.png" alt="Image Alternative text" title="Image Title" style="top: 60%; width: 56%;" />
                </div>
            </div>
        </div>
    </div>
    <div class="owl-item">
        <div class="slider-item" style="background-color:#93282B;">
            <div class="container">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-left slider-item-caption-white">
                        <h4 class="slider-item-caption-title">Беги! Беги!</h4>
                        <p class="slider-item-caption-desc">Супер кросовки по супер цене.</p>
                        <a class="btn btn-lg btn-ghost btn-white" href="#">
                            <i class="fa fa-thumbs-up" ></i>
                            В корзину
                        </a>
                    </div>
                    <img class="slider-item-img-right" src="/shop_resource/img/test_slider/3-i.png" alt="Image Alternative text" title="Image Title" />
                </div>
            </div>
        </div>
    </div>
</div>

<div class="gap"></div>
<div class="container">
    <div class="row" data-gutter="15">
        <div class="col-md-4">
            <div class="banner" style="background-color:#83599A;">
                <a class="banner-link" href="#"></a>
                <div class="banner-caption-top-left">
                    <h5 class="banner-title">Специальные предложения.</h5>
                    <p class="banner-desc">Только одну неделю,спешите</p>
                    <p class="banner-shop-now">Подробнее <i class="fa fa-hand-o-up"></i>
                    </p>
                </div>
                <img class="banner-img" src="/shop_resource/img/test_banner/1-i.png" alt="Image Alternative text" title="Image Title" style="bottom: -8px; right: -32px;" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner" style="background-color:#EF4D9C;">
                <a class="banner-link" href="#"></a>
                <div class="banner-caption-top-right">
                    <h5 class="banner-title">Лучшие планшеты <?= date('Y'); ?> </h5>
                    <p class="banner-desc">Два планшета в два раза больше удовольствия.</p>
                    <p class="banner-shop-now">Подробнее <i class="fa fa-hand-o-up"></i>
                    </p>
                </div>
                <img class="banner-img" src="/shop_resource/img/test_banner/2-i.png" alt="Image Alternative text" title="Image Title" style="bottom: -22px; left: 0; width: 235px;" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner" style="background-color:#FEA92E;">
                <a class="banner-link" href="#"></a>
                <div class="banner-caption-bottom-left">
                    <h5 class="banner-title">Очки на любой вкус</h5>
                    <p class="banner-desc">Выбор супер ОГРОМНЫЙ!</p>
                    <p class="banner-shop-now">Подробнее <i class="fa fa-hand-o-up"></i>
                    </p>
                </div>
                <img class="banner-img" src="/shop_resource/img/test_banner/3-i.png" alt="Image Alternative text" title="Image Title" style="top: -4px; right: -15px; width: 220px;" />
            </div>
        </div>
    </div>




    <h3 class="widget-title-lg" style="text-align: center;">Товары-новинки</h3>

    <div class="row" data-gutter="15">
        <?php

        $products =  ProductTable::getLatestProduct(12);

        foreach ($products as $product):

        ?>
        <div class="col-md-3">
            <div class="product">
                <?php if($product['is_new']): ?>
                <ul class="product-labels">
                    <li>new</li>
                </ul>
                <?php endif;?>
                <a class="" href="/shop/product/<?=$product['id']?>">
                    <div class="product-img-wrap">
                        <img class="product-img-primary" src="<?=$product['image']?>" alt="Image Alternative text" title="Image Title" />
                    </div>

                    <div class="product-caption">
                        <ul class="product-caption-rating">
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                            <li class="rated"><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <div class="code">
                            Код товара:<?=$product['code']?>
                        </div>
                        <h5 class="product-caption-title"><?=$product['name']?></h5>
                </a>
                    <div class="product-caption-price">
                        <span class="product-caption-price-new"><?=$product['price']?>грн.</span>
                        <a  data-id="<?=$product['id']?>" class="btn btn-warning add-to-cart">
                            <i class="fa fa-shopping-cart">&nbsp; В корзину</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>









