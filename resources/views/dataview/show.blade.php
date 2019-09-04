@extends('layouts.app')

@section('title')

@section('content')


<div class="mainbox" >
    <div class="clearfix visible-xs-block"></div>
        <div class="row" style="padding-right: 0px; padding-left: 0px;margin-left: 0px;margin-right: 0px; ">
            <div class="clearfix visible-xs-block"></div>    
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式1</div>
                        <div class="allnav" id="echart1"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式2</div>
                        <div class="allnav" id="echart2"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式4</div>
                        <div class="allnav" id="echart4"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式5</div>
                        <div class="allnav" id="echart5"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式9</div>
                        <div class="allnav" id="echart9"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式10</div>
                        <div class="allnav" id="echart10"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner" >
                            <div class="boxall carousel-item active" style="height: 3.2rem" > 
                                <div class="alltitle">模块标题样式6</div>
                                <div class="first-slide allnav" alt="First slide" id="echart6"></div> 
                                <div class="boxfoot"></div> 
                            </div>  
                            <div class="boxall carousel-item" style="height: 3.2rem"> 
                                <div class="alltitle">模块标题样式?</div>
                                <div class="second-slide allnav" alt="Second slide" id="echart?" ></div>
                                <div class="boxfoot"></div>
                            </div>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>                         
                    </div>
                    <div class="boxall" style="height: 3.2rem">
                        <div class="alltitle">模块标题样式11</div>
                        <div class="allnav" id="echart11"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>      
        </div>   
              
        <div class="row" style="padding-right: 0px; padding-left: 0px;margin-left: 0px;margin-right: 0px;">  
            <div class="col-md-12"> 
                <div class="boxall center-block" style="height: 3.2rem; padding-bottom: 0px; margin-bottom: 0px;">
                    <div style="height:100%; width: 100%;">
                        <div class="alltitle">图</div>
                        <div class="allnav" id="fb1"></div>
                        <div class="boxfoot"></div>
                    </div>                         
                </div>
            </div>                            
     
                      
        </div>
    </div>
</div>
@stop