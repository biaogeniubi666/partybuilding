@extends('layouts.app')

@section('title')

@section('content')

    <div class="row" style="padding-right: 0px; padding-left:0px; margin-left:9.5px; margin-right:9.5px;">  
        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">二氧化碳（CO2）</div>
                <div class="allnav" id="echart1"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall">
                <div class="alltitle">可挥发化合物（VOC）</div>
                <div class="allnav" id="echart2"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">实时湿度</div>
                <div class="allnav" id="echart3"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall">
                <div class="alltitle">实时温度</div>
                <div class="allnav" id="echart4"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">
            <div class="boxall">
                <div class="alltitle">
                    <i class="far fa-spin fa-neuter " aria-hidden="true"></i> 
                    PM2.5
                </div>
                <div class="allnav" id="echart5"></div>
                <div class="boxfoot"></div>
            </div>

            <div class="boxall">
                <div class="alltitle">甲醛</div>
                <div class="allnav" id="echart6"></div>
                <div class="boxfoot"></div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-3">

            <div class="boxall">
                <div class="alltitle">总灯光控制</div>
                <a  
                    type="button" class="btn btn-success btn-sm center-block" 
                    id="ledswitch_all"
                    {{-- href="{{ route('led.socketpython',0) }}" --}}
                    aria-label="Left Align"
                    style="padding-bottom: 0px; padding-top: 0px; margin-top: 0.2rem;">
                    <i class="fa fa-spin fa-lemon " aria-hidden="true"></i> 
                    <p style="font-size:.3rem;">总开关</p>
                </a>
                <div class="syled">
                    <a type="button" id="ledswitch_led1"
                        class="btn btn-success center-block btn-sm" 
                        aria-label="Left Align">
                        <p style="font-size:.2rem;">测试1</p>
                    </a>    
                </div> 
                <div class="syled">
                        <a type="button" id="ledswitch_led2"
                        class="btn btn-success center-block btn-sm" 
                        aria-label="Left Align">
                        <p style="font-size:.2rem;">测试2</p>
                    </a>   
                </div>    
                <div class="syled">
                        <a type="button" id="ledswitch_led3"
                        class="btn btn-success center-block btn-sm" 
                        aria-label="Left Align">
                        <p style="font-size:.2rem;">测试3</p>
                    </a>   
                </div>
            </div>
        
            <div class="boxall">     
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