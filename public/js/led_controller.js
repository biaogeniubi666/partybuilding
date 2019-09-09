function postdata(){
    $.ajax({
        url:'/ledonoff',
        dataType:'json',
        type:'post',
        success: function (result) {
            console.log(result);
        },
        error : function() {
            alert("异常！");
        }
    })
}
