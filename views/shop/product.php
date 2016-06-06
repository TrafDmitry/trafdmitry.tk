<?php
/**
 * @var $product array
 */

?>
<br>
<br>
<br>
<div class="container">
    <div class="row" data-gutter="15">
        <div class="product">
            <div class="row">
                <div class="col-md-6">
                    <?php if($product['is_new']): ?>
                        <ul class="product-labels">
                            <li>new</li>
                        </ul>
                    <?php endif;?>
                    <div class="product-img-wrap">
                        <img class="product-img-primary single_photo" src="<?=$product['image']?>" alt="Image Alternative text" title="Image Title" />
                    </div>
                    <a class="product-link" href="/shop/product/<?=$product['id']?>"></a>
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
                        <div class="product-caption-price">
                            <span class="product-caption-price-new"><?=$product['price']?>грн.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="jumbotron">
                        <h3><?=$product['name']?></h3>
                        <p>
                            <?=$product['description']?>
                        </p>
                        <p>
                            <a href="#" class="btn btn-warning btn-lg"><span class="fa fa-shopping-cart"></span>&nbsp;В корзину</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
