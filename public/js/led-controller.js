$(function () {
getdata();setInterval(function(){getdata();}, 1000);

function led(leddata) {
    var element1 = document.getElementById("led1");
    if (leddata[0] == 0)
        element1.src = "images/ledoff.gif";
    else 
        element1.src = "images/ledon.gif";

    var element2 = document.getElementById("led2");
    if (leddata[1] == 0)
        element2.src = "images/ledoff.gif";
    else 
        element2.src = "images/ledon.gif";

    var element3 = document.getElementById("led3");
    if (leddata[2] == 0)
        element3.src = "images/ledoff.gif";
    else 
        element3.src = "images/ledon.gif";
}

function getdata(){
    $.ajax({
        url:'/ledshow',
        dataType:'json',
        type:'get',
        success:function(result) { 
            console.log(result);//打印服务端返回的数据(调试用)
            
            led(result);
        },
        error : function() {
            alert("异常！");
        }
    }) 
}

})
