/**
 * Created by apple on 2015/12/1.
 */
function publishtopic(url){
    var context =document.getElementById("context").value;
    if(context==""){
        alert("内容不能为空");
    }
    else{
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
                window.location ="/mywebwork/user/index";
            }
        });
    }

}


function praise(url,topicId){
    $.ajax({
        url:url,
        type: "POST",
        data:{topicId:topicId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("点赞成功");
            window.location ="/mywebwork/user/index";
        }
    });
}

function deletetopic(url,topicId){
    $.ajax({
        url:url,
        type: "POST",
        data:{topicId:topicId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("删除成功");
            window.location ="/mywebwork/user/index";
        }
    });
}


function comment(url,topicId){
    var context =document.getElementById("declaration").value;
    $.ajax({
        url:url,
        type: "POST",
        data:{topicId:topicId,context:context},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("发表成功");
            window.location ="/mywebwork/detail/topic?topicId="+topicId;
        }
    });
}