<?php

use app\models\CategoryPhpShopTable;


//echo "Поиск".$search;
//@var $search string


echo 'Поиск '.$search;
/*
function getPoint($rows,$cols,$L)
{
    $points = array();
    $points[0] = rand(0,($cols * $rows));
    $i = 1;
    for(;;)
    {
        $temp = rand(0,($cols * $rows));
        $count = 0;
        for($j = 0 ; $j < $i ; $j++ )
        {
            if(($points[$j] != $temp) && $points[$j] != ($points[$j]+1) && $points[$j] != ($points[$j]-1))

            {
                $count++;
            }
        }
        if($count == $i)
        {
            $points[$i++] = $temp;
        }
        if($i == $L)
        {
            break;
        }
    }
    return $points;
}*/

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td
$L = 5;
$k = $L - 1;
$count = $rows*$cols;

$points = array(5,17,34,56,88);

sort($points);

print_r($points);

echo '<table border="1">';

for ($tr=0; $tr < $rows; $tr++){

    echo '<tr>';

    for ($td = 0; $td < $cols; $td++)
    {
        if($count == $points[$k] && $k > 0 || $count == $points[0])
        {
            echo '<td>'.'5' .'</td>';

        }
        else
        {
            echo '<td>'.'&nbsp;&nbsp;' .'</td>';
        }


        echo $count--.' ';
    }

    echo '</tr>';
}

echo '</table>';






?>





































<div class="container">
    <div class="row">
        <div class="col-md-3">
            <h2 style="text-align: center;">Категория</h2>
            <br>
            <div class="left-side-bar panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>
                            <a href="#">Категория 1 &nbsp;<span class="badge">20</span></a>
                        </h4>
                        <hr>
                        <h4>
                            <a href="#">Категория 2 &nbsp;<span class="badge">15</span></a>
                        </h4>
                        <hr>
                        <h4>
                            <a href="#">Категория 3 &nbsp;<span class="badge">8</span></a>
                        </h4>
                        <hr>
                        <h4>
                            <a href="#">Категория 4 &nbsp;<span class="badge">33</span></a>
                        </h4>
                        <hr>
                        <h4>
                            <a href="#">Категория 5 &nbsp;<span class="badge">29</span></a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <h2 style="text-align: center;">Товары</h2>
            <br>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
            <div class="col-md-4">
                <img src="http://placehold.it/250x200" alt="">
                <h3>55.99$</h3>
                <a href="#">Джемпер синий размер любой</a>
                <br>
                <br>
                <p>
                    Lorem Ipsum - це текст-"риба", що використовується в друкарстві
                    та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI.
                </p>
                <button class="btn btn-default"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;В корзину</button>
            </div>
        </div>
    </div>
</div>




<div class="row">
    <div class="carousel slide" id="carousel">
        <ol class="carousel-indicators">
            <li class="active" data-target="#carousel" data-slide-to="0"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://placehold.it/2000x800" alt="">
                <div class="carousel-caption">
                    <h3>Первый слайд</h3>
                    <p>
                        Содержимое первого слайда
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/2000x800" alt="">
                <div class="carousel-caption">
                    <h3>Второй слайд</h3>
                    <p>
                        Содержимое второго слайда
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="http://placehold.it/2000x800" alt="">
                <div class="carousel-caption">
                    <h3>Третий слай</h3>
                    <p>
                        Содержимое третьего слайда
                    </p>
                </div>
            </div>
        </div>
        <a href="#carousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a href="#carousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
