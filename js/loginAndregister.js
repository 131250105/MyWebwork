/**
 * Created by apple on 2015/10/21.
 */
function login(){
    var username =document.getElementById("username").value;
    var password =document.getElementById("password").value;
    if(username==""){
        $('#emptyLoginTip_id').show();
        $('#emptyLoginTip_password').hide();
        $('#errorLoginTip').hide();
        return false;
    }
    if(password==""){
        $('#emptyLoginTip_id').hide();
        $('#emptyLoginTip_password').show();
        $('#errorLoginTip').hide();
        return false;
    }
    $.ajax({
        url: "user/login",
        type: "POST",
        data:{username:username,password:password},
        error: function(){
            alert('服务器忙请稍后再试');
            return false;
        },
        success: function(data,status){//如果调用php成功
            if(data=="wrong"){
                //alert(data);//解码，显示汉字
                $('#emptyLoginTip_id').hide();
                $('#emptyLoginTip_password').hide();
                $('#errorLoginTip').show();
                return true;
            }else{
                window.location.href="user/index";
                return true;
            }
        }
    });
}


function register(){
    alert("zhucela");
}