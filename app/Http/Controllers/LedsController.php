<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LedStatus;


class LedsController extends Controller
{
    public function update(){

        $led1 = LedStatus::pluck('led1')->last();
        $led2 = LedStatus::pluck('led1')->last();
        $led3 = LedStatus::pluck('led1')->last();

        return [
            'lednew' => $led1,
        ];
    }

    public function show(){

        $led1 = LedStatus::pluck('led1')->last();
        $led2 = LedStatus::pluck('led1')->last();
        $led3 = LedStatus::pluck('led1')->last();

        return [
            $led1,
            $led2,
            $led3,
        ];
    }
}