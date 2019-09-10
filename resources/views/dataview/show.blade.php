@extends('layouts.app')

@section('title')

@section('content')


<div class="mainbox" >
    <div class="clearfix visible-xs-block"></div>
        <div class="row" style="padding-right: 0px; padding-left: 0px;margin-left: 0px;margin-right: 0px; ">
            <div class="clearfix visible-xs-block"></div>    
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式1</div>
                        <div class="allnav" id="echart1"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式2</div>
                        <div class="allnav" id="echart2"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式3</div>
                        <div class="allnav" id="echart3"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式4</div>
                        <div class="allnav" id="echart4"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式5</div>
                        <div class="allnav" id="echart5"></div>
                        <div class="boxfoot"></div>
                    </div>

                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式6</div>
                        <div class="allnav" id="echart6"></div>
                        <div class="boxfoot"></div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <div id="myCarousel" class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner" style="height: 3.6rem; margin-bottom: 30px;">
                            <div class="boxall carousel-item active" style="height: 3.6rem" > 
                                <div class="alltitle">模块标题样式7</div>
                                <div class="first-slide allnav" alt="First slide" id="echart7"></div> 
                                <div class="boxfoot"></div> 
                            </div>  
                            <div class="boxall carousel-item" style="height: 3.6rem"> 
                                <div class="alltitle">模块标题样式?</div>
                                <div class="second-slide allnav" alt="Second slide" id="echart?" ></div>
                                <div class="boxfoot"></div>
                            </div>
                        </div>
                                              
                    </div>
                    <div class="boxall" style="height: 3.6rem">
                        <div class="alltitle">模块标题样式8</div>   
                            <div class="syled"><img id="led1" class="center-block img-thumbnail"></div> 
                            <div class="syled"><img id="led2" class="center-block img-thumbnail"></div>    
                            <div class="syled"><img id="led3" class="center-block img-thumbnail"></div>
                            <div class="boxfoot"></div>
                        </div>
                        
                    </div>
                </div>      
        </div>   
              
        <div class="row" style="padding-right: 0px; padding-left: 0px;margin-left: 0px;margin-right: 0px;  ">  
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
<<<<<<< HEAD
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
                            <button type="button" class="btn btn-warning center-block btn-sm" role="button">
                                    <span class="glyphicon glyphicon-star" aria-hidden="ture"></span> 
                                    <p>开\关</p>
                                </button>
                    </div>
                    <div class="boxfoot"></div>            
=======
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
                            <button type="button" class="btn btn-warning center-block btn-sm" id="ledonoff" role="button">
                                <span class="glyphicon glyphicon-star" aria-hidden="true"></span> 
                                <p>开\关</p>
                            </button>
                        </div>
                        <div class="boxfoot"></div>
                                         
>>>>>>> 48231e68
                </div>
            </div>                            
     
                      
        </div>
    </div>
</div>
@stop