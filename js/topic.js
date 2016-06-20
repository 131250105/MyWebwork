/**
 * Created by apple on 2015/12/1.
 */
Date.prototype.Format = function (fmt) { //author: meizz
    var o = {
        "M+": this.getMonth() + 1, //月份
        "d+": this.getDate(), //日
        "h+": this.getHours(), //小时
        "m+": this.getMinutes(), //分
        "s+": this.getSeconds(), //秒
        "q+": Math.floor((this.getMonth() + 3) / 3), //季度
        "S": this.getMilliseconds() //毫秒
    };
    if (/(y+)/.test(fmt)) fmt = fmt.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(fmt)) fmt = fmt.replace(RegExp.$1, (RegExp.$1.length == 1) ? (o[k]) : (("00" + o[k]).substr(("" + o[k]).length)));
    return fmt;
}

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


function comment(url,topicId,userId){
    var context =document.getElementById("declaration").value;
    var text =document.getElementById("declaration");
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
            var tables  =document.getElementById("tables");
            var rows = tables.rows.length;
            var objTR1 = tables.insertRow(rows-2);
            var objTD2=  objTR1.insertCell(0);
            objTD2.innerHTML=context;
            var objTR = tables.insertRow(rows-2);
            var objTD=  objTR.insertCell(0);
            objTD.innerHTML="发表人:"+userId;
            var objTD1=  objTR.insertCell(1);
            objTD1.innerHTML="发表时间:"+new Date().Format("yyyy-MM-dd hh:mm:ss");
            text.value="";
        }
    });
}