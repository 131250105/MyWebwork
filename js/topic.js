/**
 * Created by apple on 2015/12/1.
 */
function publishtopic(url){
    alert(url);
    var context =document.getElementById("context").value;
    if(context==""){
        alert("内容不能为空");
    }
    else{
        alert(url);
        $.ajax({
            url:url,
            type: "POST",
            data:{context:context},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
                //alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                alert("发布成功");
            }
        });
    }

}