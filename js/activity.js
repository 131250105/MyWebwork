/**
 * Created by apple on 2015/11/30.
 */
function publishactivity(url){
    var name =document.getElementById("name").value;
    var intro =document.getElementById("intro").value;
    var starttime =document.getElementById("starttime").value;
    var endtime =document.getElementById("endtime").value;
    var location =document.getElementById("location").value;
    var beizhu =document.getElementById("beizhu").value;
    if(name==""||intro==""||starttime==""||endtime==""||location==""||beizhu==""){
                alert("您有信息未填写");
    }
    else{
        $.ajax({
            url:url,
            type: "POST",
            data:{name:name,intro:intro,starttime:starttime,endtime:endtime,location:location,beizhu:beizhu},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
                //alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                alert("保存成功");
            }
        });
    }
}


