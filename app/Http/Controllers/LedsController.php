<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{

    
    public function socketpython($id){

        // 根据按钮进行灯光指令输出
        $led = LedStatus::find(1);
        $con = array(ledswitchAll($id, $led->led1, $led->led2, $led->led3));
        $con_data = $con[0][1];
        ppython1("test_socket::go" , "conled" . $con_data);

        //test 更新ledflag
        $led -> update($con[0][0]);
    }

    public function update(){

        $led = LedStatus::first();
        $lednew = ledonoff($led->id, $led->led1, $led->led2, $led->led3);
        $led->update($lednew);
    }

    public function show(){

        $led = LedStatus::find(1);
        return [$led->led1, $led->led2, $led->led3];
  
    }
}