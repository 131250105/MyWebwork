/**
 * Created by apple on 2015/10/21.
 */
function login(){
    var username =document.getElementById("username").value;
    var password =document.getElementById("password").value;
    $.ajax({
        url: "user/login",
        type: "POST",
        data:{username:username,password:password},
        error: function(){
            alert('服务器忙请稍后再试');
        },
        success: function(data,status){//如果调用php成功
            if(data=="wrong"){
                alert(data);//解码，显示汉字
            }
        }
    });
}