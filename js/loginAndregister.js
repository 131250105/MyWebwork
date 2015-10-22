/**
 * Created by apple on 2015/10/21.
 */
function login(){
    var email =document.getElementById("email").value;
    var password =document.getElementById("loginpassword").value;
    /*
    输入判断开始
     */
    if(email==""){
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
    /*
    输入判断结束
     */

    /*
    ajax传数据开始
     */
    $.ajax({
        url: "user/login",
        type: "POST",
        data:{email:email,password:password},
        error: function(){
            alert('服务器忙请稍后再试');
            return false;
        },
        success: function(data,status){//如果调用php成功
            if(data=="wrong"){
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

    /*
     ajax传数据结束
     */
}


function register(){
    var email =document.getElementById("registeremail").value;
    var password =document.getElementById("registerpassword").value;
    var username =document.getElementById("username").value;
    var usertype =document.getElementById("usertype").value;
    var usersex =document.getElementById("usersex").value;
    $.ajax({
        url: "user/register",
        type: "POST",
        data:{email:email,password:password,username:username,usertype:usertype,usersex:usersex},
        error: function(){
            alert('服务器忙请稍后再试');
            return false;
        },
        success: function(data,status) {
            if(data=="success") {
                alert("注册成功!");
                window.location.href = "user/index";
                return true;
            }else{
                alert("邮箱已被注册，请尝试更换邮箱");
            }
        }
    });
}