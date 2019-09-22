<?php


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


function randomFloat($min = 0, $max = 1) {
    //用于测试，定义一个函数用于生成指定最大最小范围内随机浮点数
    return $min + mt_rand() / mt_getrandmax() * ($max - $min);
}