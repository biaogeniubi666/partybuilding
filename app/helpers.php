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

// function ledonoff($id, $led3)
// {
//     if ($led3 ==0) {

//         $led3 = 1;
//     } else {
//         $led3 = 0;
//     }
//     $lednew = ['id'=>$id , 'led3'=>$led3];
//     return $lednew;
// }