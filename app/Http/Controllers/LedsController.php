<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{

    
    public function socketpython($id){

        // 根据按钮进行灯光指令输出
        $led = LedStatus::where('flag', '=', 'led')->first();
        $con = array(ledswitchAll($id, $led->ch1, $led->ch2, $led->ch3));
        $con_data = $con[0][1];
        $led -> update($con[0][0]); //test 更新ledflag

        // python1为阿里云服务器的端口
        ppython1("test_socket::go" , "conled" . $con_data); 
        
        // python2为本地docker测试端口
        // ppython2("test_socket::go" , "conled" . $con_data);

        return redirect('/');
    }

    public function update(){

        $led = LedStatus::first();
        $lednew = ledonoff($led->id, $led->ch1, $led->ch2, $led->ch3);
        $led->update($lednew);
    }

    public function show(){
        $led = LedStatus::where('flag', '=', 'led')->first();
        return [$led->ch1, $led->ch2, $led->ch3];
  
    }
}