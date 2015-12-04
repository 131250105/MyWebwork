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