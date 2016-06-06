<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->registerCssFile('@web/css/form.css');
$this->registerJsFile('@web/js/calculat_function.js',['position' => $this::POS_HEAD],'widget-index');
$this->registerJsFile('@web/js/screen_correct.js',['position' => $this::POS_END],'screen-correct');



$this->title = 'Расчет пули';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Расчет пули</h1>

<div class="container">
    <div class="row">
        <div id="players" class="col-lg-3">
            <p>Количество игроков:</p>
            <ul>
                <li><input type="radio" name="players" value="players_3" />&nbsp;3 игрока</li>
                <li><input type="radio" name="players" checked="checked" value="players_4" />&nbsp;4 игрока</li>
                <li id="same_value"><input type="checkbox" name="same_value">&nbsp; Пуля у всех одинаковая</li>
            </ul>
            <br />
            <br />
            <button type="button" class="btn btn-success" name="calculation" onclick="calculat_function()">Pассчитать</button>
        </div>

        <div class="col-lg-4" style="min-height: 200px;">
            <span class="p_3_1 result"></span>
            <span class="p_3_2 result"></span>
            <span class="p_3_3 result"></span>
            <span class="p_4_1 result"></span>
            <span class="p_4_2 result"></span>
            <span class="p_4_3 result"></span>
            <span class="p_4_4 result"></span>
        </div>

    <form name="players_3">
        <div id="players_3" class="col-lg-5">
            
            <div class="rectangle">

                <input class="left_hill" type="text" name="left_hill" size="4" />
                <input class="right_hill" type="text" name="right_hill" size="4" />
                <input class="down_hill" type="text" name="down_hill" size="4" />

                <input class="left_bullet" type="text" name="left_bullet" size="2" />
                <input class="right_bullet" type="text" name="right_bullet" size="2" />
                <input class="down_bullet" type="text" name="down_bullet" size="2" />

                <input class="left_from_down" type="text" name="left_from_down" size="4" />
                <input class="left_from_right" type="text" name="left_from_right" size="4" />

                <input class="right_from_left" type="text" name="right_from_left" size="4" />
                <input class="right_from_down" type="text" name="right_from_down" size="4" />

                <input class="down_from_left" type="text" name="down_from_left" size="4" />
                <input class="down_from_right" type="text" name="down_from_right" size="4" />

                <hr class="oblique_line_left">
                <hr class="oblique_line_right">
                <hr class="vertical_line_central">
                <hr class="horizont_line_central_top">
                <hr class="horizont_line_central_down">
                <hr class="vertical_line_left_left">
                <hr class="vertical_line_left_right">
                <hr class="vertical_line_right_left">
                <hr class="vertical_line_right_right">
                <hr class="delimiter_line_left">
                <hr class="delimiter_line_right">
                <hr class="delimiter_line_down">
            </div>
        </div>
    </form>

    <form name="players_4">
        <div id="players_4" class="col-lg-5">
            <div class="square">
                
                <input class="left_hill_4" type="text" name="left_hill_4" size="2" />
                <input class="top_hill_4" type="text" name="top_hill_4" size="2" />
                <input class="right_hill_4" type="text" name="right_hill_4" size="2" />
                <input class="down_hill_4" type="text" name="down_hill_4" size="2" />

                <input class="left_bullet_4" type="text" name="left_bullet_4" size="1" />
                <input class="top_bullet_4" type="text" name="top_bullet_4" size="1" />
                <input class="right_bullet_4" type="text" name="right_bullet_4" size="1" />
                <input class="down_bullet_4" type="text" name="down_bullet_4" size="1" />

                <input class="left_from_top_4" type="text" name="left_from_top_4" size="2" />
                <input class="left_from_right_4" type="text" name="left_from_right_4" size="2" />
                <input class="left_from_down_4" type="text" name="left_from_down_4" size="2" />

                <input class="top_from_right_4" type="text" name="top_from_right_4" size="2" />
                <input class="top_from_down_4" type="text" name="top_from_down_4" size="2" />
                <input class="top_from_left_4" type="text" name="top_from_left_4" size="2" />

                <input class="right_from_down_4" type="text" name="right_from_down_4" size="2" />
                <input class="right_from_left_4" type="text" name="right_from_left_4" size="2" />
                <input class="right_from_top_4" type="text" name="right_from_top_4" size="2" />

                <input class="down_from_left_4" type="text" name="down_from_left_4" size="2" />
                <input class="down_from_top_4" type="text" name="down_from_top_4" size="2" />
                <input class="down_from_right_4" type="text" name="down_from_right_4" size="2" />


                <hr class="diagonal_line_left">
                <hr class="diagonal_line_right">
                <hr class="horizont_line_top_top">
                <hr class="horizont_line_top_down">
                <hr class="horizont_line_down_top">
                <hr class="horizont_line_down_down">
                <hr class="vertical_line_left_1">
                <hr class="vertical_line_left_2">
                <hr class="vertical_line_right_1">
                <hr class="vertical_line_right_2">
                <hr class="delimetr_line_lef_top">
                <hr class="delimetr_line_lef_down">
                <hr class="delimetr_line_right_top">
                <hr class="delimetr_line_right_down">
                <hr class="delimetr_line_top_lef">
                <hr class="delimetr_line_top_right">
                <hr class="delimetr_line_down_left">
                <hr class="delimetr_line_down_right">
            </div>
        </div>
    </form>
     </div>
</div>


<script>
    document.getElementById('same_value').onclick = function () {
        if(document.getElementsByName('same_value')[0].checked == true)
        {
            document.players_3.left_bullet.value='same';
            document.players_3.right_bullet.value='same';
            document.players_3.down_bullet.value='same';

            document.players_4.left_bullet_4.value='same';
            document.players_4.top_bullet_4.value='same';
            document.players_4.right_bullet_4.value='same';
            document.players_4.down_bullet_4.value='same';
        }
        else
        {
            document.players_3.left_bullet.value='';
            document.players_3.right_bullet.value='';
            document.players_3.down_bullet.value='';

            document.players_4.left_bullet_4.value='';
            document.players_4.top_bullet_4.value='';
            document.players_4.right_bullet_4.value='';
            document.players_4.down_bullet_4.value='';
        }
    }
    document.getElementById("players").onclick = function() {
        if (document.getElementsByName('players')[0].checked == true) {
            document.getElementById('players_4').style.display = 'none';
            document.getElementById('players_3').style.display = 'block';

        }
        else {
            document.getElementById('players_3').style.display = 'none';
            document.getElementById('players_4').style.display = 'block';
        }
    }

</script>
