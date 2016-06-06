/**
 * Created by dmitry on 21.04.16.
 */

function find_value_4(left, right, down,top,
                      left_down, left_right,left_top,
                      right_left, right_down,right_top,
                      down_left, down_right,down_top,
                      top_down,top_left,top_right)
{
    if(left <= right && left <= down && left <= top)
    {
        top-=left;
        down-=left;
        right-=left;

        right = (right / 4).toFixed(1) * 10;
        down =  (down / 4).toFixed(1) * 10;
        top =  (top / 4).toFixed(1) * 10;

        left_down+=down;
        left_right+=right;
        left_top+=top;

        top_right+=right;
        top_down+=down;

        right_top+=top;
        right_down+=down;

        down_top+=top;
        down_right+=right;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;
        var left_top_vist   = left_top - top_left;

        left = left_down_vist + left_right_vist + left_top_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;
        var right_top_vist = right_top - top_right;

        right = right_down_vist + right_left_vist + right_top_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;
        var down_top_vist = down_top - top_down;

        down = down_right_vist + down_left_vist + down_top_vist;

        var top_left_vist  = top_left - left_top;
        var top_right_vist = top_right - right_top;
        var top_down_vist = top_down - down_top;

        top = top_right_vist + top_left_vist + top_down_vist;

        $(".p_4_1").empty();
        $(".p_4_2").empty();
        $(".p_4_3").empty();
        $(".p_4_4").empty();

        $(".p_4_1").append(left);
        $(".p_4_2").append(top);
        $(".p_4_3").append(right);
        $(".p_4_4").append(down);
    }
    else if (top <= right && top <= down && top <= left)
    {
        right-=top;
        down-=top;
        left-=top;

        right = (right / 4).toFixed(1) * 10;
        down =  (down / 4).toFixed(1) * 10;
        left =  (left / 4).toFixed(1) * 10;

        top_right+=right;
        top_down+=down;
        top_left+=left;

        right_down+=down;
        right_left+=left;

        down_left+=left;
        down_right+=right;

        left_down+=down;
        left_right+=right;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;
        var left_top_vist   = left_top - top_left;

        left = left_down_vist + left_right_vist + left_top_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;
        var right_top_vist = right_top - top_right;

        right = right_down_vist + right_left_vist + right_top_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;
        var down_top_vist = down_top - top_down;

        down = down_right_vist + down_left_vist + down_top_vist;

        var top_left_vist  = top_left - left_top;
        var top_right_vist = top_right - right_top;
        var top_down_vist = top_down - down_top;

        top = top_right_vist + top_left_vist + top_down_vist;

        $(".p_4_1").empty();
        $(".p_4_2").empty();
        $(".p_4_3").empty();
        $(".p_4_4").empty();

        $(".p_4_1").append(left);
        $(".p_4_2").append(top);
        $(".p_4_3").append(right);
        $(".p_4_4").append(down);
    }
    else if(right <= top && right <= down && right <= left)
    {
        top-=right;
        down-=right;
        left-=right;

        top = (top / 4).toFixed(1) * 10;
        down =  (down / 4).toFixed(1) * 10;
        left =  (left / 4).toFixed(1) * 10;

        right_down+=down;
        right_left+=left;
        right_top+=top;

        top_left+=left;
        top_down+=down;

        left_top+=top;
        left_down+=down;

        down_left+=left;
        down_top+=top;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;
        var left_top_vist   = left_top - top_left;

        left = left_down_vist + left_right_vist + left_top_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;
        var right_top_vist = right_top - top_right;

        right = right_down_vist + right_left_vist + right_top_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;
        var down_top_vist = down_top - top_down;

        down = down_right_vist + down_left_vist + down_top_vist;

        var top_left_vist  = top_left - left_top;
        var top_right_vist = top_right - right_top;
        var top_down_vist = top_down - down_top;

        top = top_right_vist + top_left_vist + top_down_vist;

        $(".p_4_1").empty();
        $(".p_4_2").empty();
        $(".p_4_3").empty();
        $(".p_4_4").empty();

        $(".p_4_1").append(left);
        $(".p_4_2").append(top);
        $(".p_4_3").append(right);
        $(".p_4_4").append(down);
    }
    else
    {
        top-=down;
        left-=down;
        right-=down;

        top = (top / 4).toFixed(1) * 10;
        right =  (right / 4).toFixed(1) * 10;
        left =  (left / 4).toFixed(1) * 10;

        down_top+=top;
        down_left+=left;
        down_right+=right;

        top_left+=left;
        top_right+=right;

        left_top+=top;
        left_right+=right;

        right_top+=top;
        right_left+=left;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;
        var left_top_vist   = left_top - top_left;

        left = left_down_vist + left_right_vist + left_top_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;
        var right_top_vist = right_top - top_right;

        right = right_down_vist + right_left_vist + right_top_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;
        var down_top_vist = down_top - top_down;

        down = down_right_vist + down_left_vist + down_top_vist;

        var top_left_vist  = top_left - left_top;
        var top_right_vist = top_right - right_top;
        var top_down_vist = top_down - down_top;

        top = top_right_vist + top_left_vist + top_down_vist;

        $(".p_4_1").empty();
        $(".p_4_2").empty();
        $(".p_4_3").empty();
        $(".p_4_4").empty();

        $(".p_4_1").append(left);
        $(".p_4_2").append(top);
        $(".p_4_3").append(right);
        $(".p_4_4").append(down);
    }
}

function find_value_3(left, right, down, left_down, left_right, right_left, right_down, down_left, down_right) {

    if(left <= right && left <= down)
    {
        right-=left;
        down-=left;

        right = (right / 3).toFixed(1) * 10;
        down =  (down / 3).toFixed(1) * 10;

        left_right+=right;
        left_down+=down;
        down_right+=right;
        right_down+=down;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;

        left = left_down_vist + left_right_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;

        right = right_down_vist + right_left_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;

        down = down_right_vist + down_left_vist;

        $(".p_3_1").empty();
        $(".p_3_2").empty();
        $(".p_3_3").empty();

        $(".p_3_1").append(left);
        $(".p_3_2").append(right);
        $(".p_3_3").append(down);
    }

    else if(right <= left && right <= down)
    {
        left-=right;
        down-=right;

        left = (left / 3).toFixed(1) * 10;
        down =  (down / 3).toFixed(1) * 10;

        right_left+=left;
        right_down+=down;
        down_left+=left;
        left_down+=down;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;

        left = left_down_vist + left_right_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;

        right = right_down_vist + right_left_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;

        down = down_right_vist + down_left_vist;

        $(".p_3_1").empty();
        $(".p_3_2").empty();
        $(".p_3_3").empty();
        
        $(".p_3_1").append(left);
        $(".p_3_2").append(right);
        $(".p_3_3").append(down);
    }

    else
    {
        left-=down;
        right-=down;

        left = (left / 3).toFixed(1) * 10;
        right =  (right / 3).toFixed(1) * 10;

        down_left+=left;
        down_right+=right;
        left_right+=right;
        right_left+=left;

        var left_right_vist = left_right - right_left;
        var left_down_vist  = left_down - down_left;

        left = left_down_vist + left_right_vist;

        var right_left_vist = right_left - left_right;
        var right_down_vist = right_down - down_right;

        right = right_down_vist + right_left_vist;

        var down_left_vist  = down_left - left_down;
        var down_right_vist = down_right - right_down;

        down = down_right_vist + down_left_vist;

        $(".p_3_1").empty();
        $(".p_3_2").empty();
        $(".p_3_3").empty();
        $(".p_3_1").append(left);
        $(".p_3_2").append(right);
        $(".p_3_3").append(down);
    }
}

function calculat_function()
{
        if(document.getElementsByName('players')[0].checked == true)
        {
            var left_bullet = 0;
            var right_bullet = 0;
            var down_bullet = 0;
            var midle_bullet = 0;

            if(document.getElementsByName('same_value')[0].checked == false)
            {
                left_bullet = +document.players_3.left_bullet.value;
                right_bullet = +document.players_3.right_bullet.value;
                down_bullet = +document.players_3.down_bullet.value;

                midle_bullet = (left_bullet + right_bullet + down_bullet) / 3;

                left_bullet = (midle_bullet - left_bullet) * 2;
                right_bullet = (midle_bullet - right_bullet) * 2;
                down_bullet = (midle_bullet - down_bullet) * 2;
            }

            var left_hill = +document.players_3.left_hill.value;
            var right_hill = +document.players_3.right_hill.value;
            var down_hill = +document.players_3.down_hill.value;

            left_hill+=left_bullet;
            right_hill+=right_bullet;
            down_hill+=down_bullet;


            var left_from_down =  +document.players_3.left_from_down.value;
            var left_from_right =  +document.players_3.left_from_right.value;

            var right_from_left =  +document.players_3.right_from_left.value;
            var right_from_down =  +document.players_3.right_from_down.value;

            var down_from_left =  +document.players_3.down_from_left.value;
            var down_from_right =  +document.players_3.down_from_right.value;

            if(isNaN(left_from_down) || isNaN(left_from_right) || isNaN(right_from_left) || isNaN(right_from_down) || isNaN(down_from_left) || isNaN(down_from_right) || isNaN(left_hill) || isNaN(right_hill) || isNaN(down_hill))
            {
                alert('У вас ошибка записи вистов или горки!');
            }
            else
            {
                find_value_3(left_hill, right_hill, down_hill, left_from_down, left_from_right, right_from_left, right_from_down, down_from_left, down_from_right);
            }
        }
        else
        {
            var left_bullet = 0;
            var right_bullet = 0;
            var down_bullet = 0;
            var top_bullet = 0;
            var midle_bullet = 0;

            if(document.getElementsByName('same_value')[0].checked == false)
            {
                left_bullet = +document.players_4.left_bullet_4.value;
                right_bullet = +document.players_4.right_bullet_4.value;
                down_bullet = +document.players_4.down_bullet_4.value;
                top_bullet = +document.players_4.top_bullet_4.value;

                midle_bullet = (left_bullet + right_bullet + down_bullet + top_bullet) / 4;

                left_bullet = (midle_bullet - left_bullet) * 2;
                right_bullet = (midle_bullet - right_bullet) * 2;
                down_bullet = (midle_bullet - down_bullet) * 2;
                top_bullet = (midle_bullet - top_bullet) * 2;
            }

            var left_hill = +document.players_4.left_hill_4.value;
            var top_hill = +document.players_4.top_hill_4.value;
            var right_hill = +document.players_4.right_hill_4.value;
            var down_hill = +document.players_4.down_hill_4.value;

            left_hill+=left_bullet;
            right_hill+=right_bullet;
            down_hill+=down_bullet;
            top_hill+=top_bullet;

            var left_from_down =  +document.players_4.left_from_down_4.value;
            var left_from_right =  +document.players_4.left_from_right_4.value;
            var left_from_top =  +document.players_4.left_from_top_4.value;

            var right_from_left =  +document.players_4.right_from_left_4.value;
            var right_from_down =  +document.players_4.right_from_down_4.value;
            var right_from_top =  +document.players_4.right_from_top_4.value;

            var down_from_left =  +document.players_4.down_from_left_4.value;
            var down_from_right =  +document.players_4.down_from_right_4.value;
            var down_from_top =  +document.players_4.down_from_top_4.value;

            var top_from_left =  +document.players_4.top_from_left_4.value;
            var top_from_right =  +document.players_4.top_from_right_4.value;
            var top_from_down =  +document.players_4.top_from_down_4.value;



            if(isNaN(left_hill) || isNaN(right_hill) || isNaN(top_hill) || isNaN(down_hill)
                || isNaN(left_from_down) || isNaN(left_from_right) || isNaN(left_from_top)
                || isNaN(top_from_down) || isNaN(top_from_left) || isNaN(top_from_right)
                || isNaN(down_from_left) || isNaN(down_from_right) || isNaN(down_from_top)
                || isNaN(right_from_down) || isNaN(right_from_left) || isNaN(right_from_top))
            {
                alert('У вас ошибка записи вистов или горки!');
            }
            else
            {
                find_value_4(left_hill, right_hill, down_hill,top_hill,
                    left_from_down, left_from_right,left_from_top,
                    right_from_left, right_from_down,right_from_top,
                    down_from_left, down_from_right,down_from_top,
                    top_from_down,top_from_left,top_from_right);
            }
        }
}

