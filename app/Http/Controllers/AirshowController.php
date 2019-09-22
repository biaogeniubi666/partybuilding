<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AirshowController extends Controller
{
    public function airdata(){

        $maxid = AirData::max('id') - 10;
        $co2_forchart = AirData::where('id', '>', $maxid)->pluck('CO2');
        $voc_forchart = AirData::where('id', '>', $maxid)->pluck('VOC');
        $pm25_forchart = AirData::where('id', '>', $maxid)->pluck('PM25');
        $ch2o_forchart = AirData::where('id', '>', $maxid)->pluck('CH2O');

        $humi = AirData::pluck('HUMI')->last();
        $temp = AirData::pluck('TEMP')->last();

        return [$co2_forchart, $voc_forchart,
        $pm25_forchart, $ch2o_forchart, $humi, $temp];
    }
       
}
