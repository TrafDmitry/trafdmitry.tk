<?php

use yii\helpers\Html;

$this->registerCss('tml, body { height: 100%; margin: 0; padding: 0; }
        #map { height: 100%;
        }
        ');
$this->registerJsFile('@web/js/map.js',['position' => $this::POS_HEAD],'map-api');

$this->title = 'Работа с maps api';
$this->params['breadcrumbs'][] = $this->title;

?>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAcpVcoiGO30z7IEX5CL0fFQdFK5ltE8kA&callback=initMap">
</script>

<h3>Поставить метку на карте</h3>

<p>
    ВВедите полный адресс,пример:"Крещатик 1 Киев"
</p>

<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div id="floating-panel">
                <input id="address" type="textbox" value="Крещатик 1 Киев" />
                <br>
                <br>
                <input id="submit" type="button" class="btn btn-success" value="Поставить метку" />
            </div>
        </div>
        <div class="col-md-10">
            <div id="map"></div>
        </div>
    </div>
</div>






