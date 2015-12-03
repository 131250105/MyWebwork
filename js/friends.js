/**
 * Created by apple on 2015/12/3.
 */
function addfriends(url,userId){
    $.ajax({
        url:url,
        type: "POST",
        data:{userId:userId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
        },
        success: function(data,status) {
            alert("加好友成功");
            window.location ="/mywebwork/user/otherUserView?userId="+userId;
        }
    });
}


function deletefriends(url,userId){
    $.ajax({
        url:url,
        type: "POST",
        data:{userId:userId},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
        },
        success: function(data,status) {
            alert("删除好友成功");
            window.location ="/mywebwork/user/otherUserView?userId="+userId;
        }
    });
}