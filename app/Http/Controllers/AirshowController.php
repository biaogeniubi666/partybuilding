<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\Models\Air;

class AirshowController extends Controller
{
    public function airdata(){

        $maxid = Air::max('id') - 10;
        $co2_forchart = Air::where('id', '>', $maxid)->pluck('CO2');
        $voc_forchart = Air::where('id', '>', $maxid)->pluck('VOC');
        $pm25_forchart = Air::where('id', '>', $maxid)->pluck('PM25');
        $ch2o_forchart = Air::where('id', '>', $maxid)->pluck('CH2O');

        $humi = Air::pluck('HUM')->last();
        $temp = Air::pluck('TEM')->last();

        return [$co2_forchart, $voc_forchart,
        $pm25_forchart, $ch2o_forchart, $humi, $temp];
    }
       
}
