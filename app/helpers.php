<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function category_nav_active($category_id)
{
    return active_class((if_route('categories.show') && if_route_param('category', $category_id)));
}

function make_excerpt($value, $length = 200)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    // trim() 函数移除字符串两侧的空白字符或其他预定义字符。
    return str_limit($excerpt, $length);
}

function ledonoff($id, $led1, $led2, $led3)
{
    if ($led1 ==0 & $led2 ==0 & $led3 ==0) {
        $led1 = 1;
        $led2 = 1;
        $led3 = 1;
    } else {
        $led1 = 0;
        $led2 = 0;
        $led3 = 0;
    }
    $lednew = ['id'=>$id ,'led1'=>$led1, 'led2'=>$led2, 'led3'=>$led3];
    return $lednew;
}