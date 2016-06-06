<?php

/**
 * @var $models array product where category_id = $this
 * @var $pages Pagination object
 * @var $category_name array
 *
 */

use yii\widgets\LinkPager;

?>



<div class="container">
    <h3 class="widget-title-lg" style="text-align: center;"><?=$category_name['name']?></h3>

        <div class="row" data-gutter="15">
            <?php


            foreach ($models as $model):

                ?>
                <div class="col-md-3">
                    <div class="product">
                        <?php if($model['is_new']): ?>
                            <ul class="product-labels">
                                <li>new</li>
                            </ul>
                        <?php endif;?>
                        <div class="product-img-wrap">
                            <img class="product-img-primary" src="<?=$model['image']?>" alt="Image Alternative text" title="Image Title" />
                        </div>
                        <a class="product-link" href="/shop/product/<?=$model['id']?>"></a>
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
                            <h5 class="product-caption-title"><?=$model['name']?></h5>
                            <div class="product-caption-price">
                                <span class="product-caption-price-new"><?=$model['price']?>грн.</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    <?php

    echo LinkPager::widget([
        'pagination' => $pages,

    ]);

    ?>
    </div>

</div>
