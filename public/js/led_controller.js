$(function () {

getdata();
document.getElementById("ledonoff").addEventListener("click",onoff);


function onoff() {
    $.ajax({
        url:'/ledonoff',
        type:'get',
        success: function () {//result和data没关系
            getdata();
        },
        error : function() {
            alert("开关控制异常！");
        }
    })
}

function getdata(){
    $.ajax({
        url:'/ledshow',
        dataType:'json',
        type:'get',
        success:function(result) { 
            console.log(result);//打印服务端返回的数据(调试用)
            var element1 = document.getElementById("led1");
            if (result[0] == 0)
                element1.src = "images/ledoff.gif";
            else 
                element1.src = "images/ledon.gif";

            var element2 = document.getElementById("led2");
            if (result[1] == 0)
                element2.src = "images/ledoff.gif";
            else 
                element2.src = "images/ledon.gif";

            var element3 = document.getElementById("led3");
            if (result[2] == 0)
                element3.src = "images/ledoff.gif";
            else 
                element3.src = "images/ledon.gif"; 
        },
        error : function() {
            alert("异常！");
        }
    })
}

})