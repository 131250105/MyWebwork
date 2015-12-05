/**
 * Created by apple on 2015/12/5.
 */
function creategroup(url){
    var grouptype =document.getElementById('hobby').value;
    var groupintro=document.getElementById('declaration').value;
    var groupname=document.getElementById('nickname').value;
    if(grouptype==""||groupintro==""||groupname==""){
        alert("您有信息未填写完整");
    }
    else{
        $.ajax({
            url:url,
            type: "POST",
            data:{grouptype:grouptype,groupintro:groupintro,groupname:groupname},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
                //alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                alert("创建成功");
                window.location ="/mywebwork/user/publishedCircle";
            }
        });
    }
}

function deletecirclr(url,circleId){
    $.ajax({
        url:url,
        type: "POST",
        data:{groupId:circleId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("删除成功");
            window.location ="/mywebwork/user/publishedCircle";
        }
    });
}

function joincircle(url,circleId){
    $.ajax({
        url:url,
        type: "POST",
        data:{groupId:circleId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("加入成功");
            window.location ="/mywebwork/detail/circle?circleId="+circleId;
        }
    });
}

function quitcircle(url,circleId){
    $.ajax({
        url:url,
        type: "POST",
        data:{groupId:circleId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("退出成功");
            window.location ="/mywebwork/detail/circle?circleId="+circleId;
        }
    });
}