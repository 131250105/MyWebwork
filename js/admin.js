/**
 * Created by apple on 2015/12/3.
 */
function adminlogin(url){
    var username =document.getElementById("email").value;
    var password =document.getElementById("loginpassword").value;
    $.ajax({
        url:url,
        type: "POST",
        data:{username:username,password:password},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            if(data=="fail"){
                alert("账号或者密码错误");
            }
            else{
                window.location ="/mywebwork/admin/userlist";
            }

        }
    });
}