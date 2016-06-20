/**
 * Created by apple on 2015/12/4.
 */
function post(url){
    var adviceTitle =document.getElementById("adviceTitle").value;
    var adviceContent =document.getElementById("content").value;
    var adviceplace =document.getElementById("postPlace").value;
    $.ajax({
        url:url,
        type: "POST",
        data:{adviceTitle:adviceTitle,adviceContent:adviceContent,adviceplace:adviceplace},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            if(data=="typefail"){
                alert("您的身份不具有在该板块发言权限");
            }
            else {
                alert("发布成功");
                window.location ="/mywebwork/advice/userindex";
            }
        }
    });
}


function reply(url,adviceId){
    alert(url);
    var adviceContent =document.getElementById("content").value;
    $.ajax({
        url:url,
        type: "POST",
        data:{adviceContent:adviceContent,adviceId:adviceId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
            return false;
        },
        success: function(data,status) {
            alert("评论成功");
            window.location ="/mywebwork/detail/advice?adviceId="+adviceId;
        }
    });
}

function pageJump(a,p){
    if(a==1)window.location ="/mywebwork/advice/userindex?page="+p;
    if(a==2)window.location ="/mywebwork/advice/forHelp?page="+p;
    if(a==3)window.location ="/mywebwork/advice/coach?page="+p;
    if(a==4)window.location ="/mywebwork/advice/doctor?page="+p;
}