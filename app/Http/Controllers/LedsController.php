<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{

    
    public function socketpython($id){

        // $led_binary = LedStatus::first();
        $controll_msg = ledswitchAll($id);
        ppython("test_socket::go" , $controll_msg);

        return ;
    }

    public function update(){

        $led = LedStatus::first();
        $lednew = ledonoff($led->id, $led->led1, $led->led2, $led->led3);
        $led->update($lednew);
    }

    public function show(){

        $led = LedStatus::first();
        return [
            $led->led1,
            $led->led2,
            $led->led3,
        ];
    }
}