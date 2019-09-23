<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{
    public function socketphp(){
        socketphp();
        return redirect()->back();
    }
    
    public function socketpython(){
        ppython("test_socket::go");
        return redirect()->back();
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