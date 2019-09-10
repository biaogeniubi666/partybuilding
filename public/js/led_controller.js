document.getElementById("ledonoff").addEventListener("click",onoff);

function onoff() {
    $.ajax({
        url:'/ledonoff',
        type:'get',
        success: function (result) {//result和data没关系
            console.log(result);//打印服务端返回的数据(调试用)
            if (result.resultCode == 200) {
                alert("SUCCESS");
            };
        },
        error : function() {
            alert("开关控制异常！");
        }
    })
}


