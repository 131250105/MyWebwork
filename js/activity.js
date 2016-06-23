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
    var type =document.getElementById("type").value;
    if(name==""||intro==""||starttime==""
        ||endtime==""||location==""||type==""){
        swal("您有信息未填写", "请填写完整", "error");
    }
    else if(beizhu==""){
        beizhu="暂无";
    }
    else{
        $.ajax({
            url:url,
            type: "POST",
            data:{name:name,intro:intro,starttime:starttime,endtime:endtime,location:location,beizhu:beizhu,type:type},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
                //alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                //alert("发布活动成功");
                swal("Good job!", "Release activity success!", "success");
                setTimeout("window.location ='/mywebwork/activity/published?page=1';", 2000 );
            }
        });
    }
}


function join(url,id){
    $.ajax({
        url:url,
        type: "POST",
        data:{activityId:id},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            //alert("报名成功");
            swal("Good job!", "Sign up success!", "success");
            setTimeout("window.location ='/mywebwork/activity/joined?page=1';", 2000 );
        }
    });
}


function collect(url,id){
    $.ajax({
        url:url,
        type: "POST",
        data:{activityId:id},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            //alert("收藏成功");
            swal("Good job!", "Collect success!", "success");
            setTimeout("window.location ='/mywebwork/activity/collected?page=1';", 2000 );
        }
    });
}


function canceljoin(url,id){
    $.ajax({
        url:url,
        type: "POST",
        data:{activityId:id},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            alert(XMLHttpRequest.status);
            alert(XMLHttpRequest.readyState);
            alert(textStatus);
            return false;
        },
        success: function(data,status) {
           // alert("取消报名成功");
            swal("Good job!", "You clicked the button!", "success");
            setTimeout("window.location ='/mywebwork/activity/joined?page=1';", 2000);
        }
    });
}


function cancelcollect(url,id){
    $.ajax({
        url:url,
        type: "POST",
        data:{activityId:id},
        error: function(XMLHttpRequest, textStatus, errorThrown){
            alert('服务器忙请稍后再试');
            //alert(XMLHttpRequest.status);
            //alert(XMLHttpRequest.readyState);
            //alert(textStatus);
            return false;
        },
        success: function(data,status) {
            //alert("取消收藏成功");
            swal("Good job!", "Cancel collection success!", "success");
            setTimeout("window.location ='/mywebwork/activity/collected?page=1';", 2000 );
        }
    });
}

function pageJump(a,p){
    if(a==1)window.location ="/mywebwork/activity/userindex?page="+p;
    else if(a==2)window.location ="/mywebwork/activity/joined?page="+p;
    else if(a==3)window.location ="/mywebwork/activity/published?page="+p;
    else if(a==4)window.location ="/mywebwork/activity/collected?page="+p;
}

