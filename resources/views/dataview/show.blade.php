@extends('layouts.app')

@section('title')

@section('content')

    <div class="row" style="padding-right: 0px; padding-left:0px; margin-left:9.5px; margin-right:9.5px;">  
        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">二氧化碳（CO2）指标：毫升 / 立方米</div>
                <div class="allnav" id="echart1"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall" style="margin-bottom: 0px;">
                <div class="alltitle">可挥发化合物（VOC）指标：毫克 / 立方米</div>
                <div class="allnav" id="echart2"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">实时湿度：相对百分比</div>
                <div class="allnav" id="echart3"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall" style="margin-bottom: 0px;">
                <div class="alltitle">实时温度：摄氏度</div>
                <div class="allnav" id="echart4"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">PM2.5指标：微克 / 立方米</div>
                <div class="allnav" id="echart5"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall" style="margin-bottom: 0px;">
                <div class="alltitle">甲醛指标：毫克 / 立方米</div>
                <div class="allnav" id="echart6"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">

            <div class="boxall">
                <div class="alltitle">总灯光控制</div>
                <button type="button" class="btn btn-info btn-sm center-block" aria-label="Left Align" id="ledonoff"
                    style="padding-bottom: 0px; padding-top: 0px; margin-top: 70px;">
                    <i class="far fa-save mr-2" aria-hidden="true"></i> 总开关
                </button>
                <div> 
                <div class="syled"><img id="led1" class="center-block img-thumbnail"></div> 
                <div class="syled"><img id="led2" class="center-block img-thumbnail"></div>    
                <div class="syled"><img id="led3" class="center-block img-thumbnail"></div>
                </div>
            </div>

            <div class="boxall" style="margin-bottom: 0px;">     
                <div class="alltitle">灯光模拟输出</div>   
                <div class="syled"><img id="led1" class="center-block img-thumbnail"></div> 
                <div class="syled"><img id="led2" class="center-block img-thumbnail"></div>    
                <div class="syled"><img id="led3" class="center-block img-thumbnail"></div>
                <div class="boxfoot"></div>
            </div>
        </div>
    </div>      

    {{-- <div class="row" style="padding-right: 0px; padding-left:0px; margin-left:9.5px; margin-right:9.5px;">
        <div class="clearfix visible-xs-block"></div>  
        <div class="col-md-12"> 
            <div class="boxall center-block" style="height: 3.2rem; padding-bottom: 0px; margin-bottom: 0px;">
                <div class="sy">
                    <button type="button" class="btn btn-primary center-block btn-sm" role="button">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                        <p>情景3</p>
                    </button>
                </div>                   
                <div class="sy">
                    <button type="button" class="btn btn-primary center-block btn-sm" role="button">
                            <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                            <p>情景2</p>
                        </button>
                </div>                  
                <div class="sy">
                        <button type="button" class="btn btn-primary center-block btn-sm" role="button">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                <p>情景1</p>
                            </button>
                </div>
                <div class="sy">                  
                    <button type="button" class="btn btn-warning center-block btn-sm" id="ledonoff">
                        <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                        <p>开\关</p>
                    </button>
                </div>
                <div class="boxfoot"></div>                           
            </div>
        </div>                                      
    </div> --}}

@stop