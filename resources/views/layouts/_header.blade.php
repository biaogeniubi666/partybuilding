<div class="clearfix visible-xs-block"></div>
<div class="row" style="padding-right: 0px; padding-left: 0px;margin-left: 0px;margin-right: 0px;">
    <div class="col-md-12">
      <div class="head">
        <h1>Owell智慧健康平台</h1>
        <div class="weather"><!--<img src="picture/weather.png"><span>多云转小雨</span>--><span id="showTime"></span></div>
            
        {{-- 北京时间,有空再整 --}}
        <script>
          var t = null;
              t = setTimeout(time,1000);//開始运行
              function time()
                {
                clearTimeout(t);//清除定时器
                dt = new Date();
                    var y=dt.getFullYear();
                    var mt=dt.getMonth()+1;
                    var day=dt.getDate();
                var h=dt.getHours();//获取时
                var m=dt.getMinutes();//获取分
                var s=dt.getSeconds();//获取秒
                document.getElementById("showTime").innerHTML = y+"年"+mt+"月"+day+"-"+h+"时"+m+"分"+s+"秒";
                t = setTimeout(time,1000); //设定定时器，循环运行     
              } 
        </script>
      </div>
    </div>
</div>