<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{
    public function update(){

        $led = LedStatus::first();
        $lednew = ledonoff($led->id, $led->led1, $led->led2, $led->led3);
        $led->update($lednew);
        return redirect()->back();
    }

    public function show(){

        $led = LedStatus::first();
        $lednew = ledonoff($led->id, $led->led1, $led->led2, $led->led3);
        $led->update($lednew);
        return [
            $led->led1,
            $led->led2,
            $led->led3,
            $lednew
        ];
    }
}