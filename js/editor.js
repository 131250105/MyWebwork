/**
 * Created by apple on 2015/10/29.
 */

function editordata(url){
    var name =$("#nickname").val();
    var usersex =document.getElementById("usersex").value;
    var birthyear =document.getElementById("birth_y").value;
    var birthmonth =document.getElementById("birth_m").value;
    var birthday =document.getElementById("birth_d").value;
    var province =document.getElementById("location_province").value;
    var city =document.getElementById("location_city").value;
    var hobby =document.getElementById("hobby").value;
    var declaration =document.getElementById("declaration").value;
    $.ajax({
            url:url,
            type: "POST",
            data:{username:name,usersex:usersex,birthyear:birthyear,birthmonth:birthmonth,birthday:birthday,province:province,city:city,hobby:hobby,declaration:declaration},
    error: function(XMLHttpRequest, textStatus, errorThrown){
        alert('服务器忙请稍后再试');
        //alert(XMLHttpRequest.status);
        //alert(XMLHttpRequest.readyState);
        //alert(textStatus);
        return false;
    },
    success: function(data,status) {
        alert("保存成功");
    }
});

}

function uploadpicture(){

}

