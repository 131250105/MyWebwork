<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/10/23
 * Time: 22:46
 */
include_once("bean/userbean.php");
include_once('commerHeader.php');
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/avatar_upload.css');?>" rel="stylesheet" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('jquery-1.8.0.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/editor.js');?>"></script>
    <script type="text/javascript" src=" <?php echo base_url('js/cropbox.js');?>"></script>
    <script type="text/javascript" src=" <?php echo base_url('js/mouseHover.js');?>"></script>
    <style type="text/css">
        @font-face {
            font-family: 'Glyphicons Halflings';

            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot');?>');
            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot?#iefix');?>') format('embedded-opentype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.woff');?>') format('woff'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.ttf');?>') format('truetype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular');?>') format('svg');
        }
    </style>

</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 400%;">

<div class="container">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="padding-right: 50px;">
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="line-height: 2;font-size: xx-large;font-family:'华文中宋';">个人设置</p>
                </div>
            </div>
            <div class="row" >
                <p style="visibility: hidden">位置调整</p>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active" style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;基本信息</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <p style="visibility: hidden">位置调整</p>
            <ul class="nav nav-tabs" style="padding-left: 20px;">
                <li class="active" id="data"><a href="javascript:void (0);">&nbsp;&nbsp;个人资料&nbsp;&nbsp;</a></li>
                <li id="avatar"><a href="javascript:void (0);">&nbsp;&nbsp;头像设置&nbsp;&nbsp;</a></li>
            </ul>
            <form>
            <table class="table table-default" id="dataTab">
                <caption style="visibility: hidden">编辑资料</caption>

                <tbody>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">昵称</td>
                    <td style="border:0px" colspan="3">
                        <textarea class="form-control" rows="1" style="resize: none;" id="nickname" placeholder="昵称"><?php echo $user->getusername();?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">性别</td>
                    <td style="border:0px" colspan="3">
                            <select class="form-control" id =usersex>
                                <?php if($user->getSex()=="男"){
                                    echo "<option>男</option>";
                                    echo "<option>女</option>";
                                }else{
                                    echo "<option>女</option>";
                                    echo "<option>男</option>";
                                }
                                ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">生日</td>
                    <td style="border:0px">
                            <select class="form-control" id =birth_y onchange="changemonth()">
                                <?php if(!is_null($user->getBirthyear())){
                                    echo "<option>".$user->getBirthyear()."</option>";
                                }
                                ?>
                            </select>
                    </td>
                    <td style="border:0px">
                            <select class="form-control" id =birth_m onchange="changemonth()">
                                <?php if(!is_null($user->getBirthmonth())){
                                    echo "<option>".$user->getBirthmonth()."</option>";
                                }
                                ?>
                            </select>
                    </td>
                    <td style="border:0px">
                            <select class="form-control" id =birth_d>
                                <?php if(!is_null($user->getBirthday())){
                                    echo "<option>".$user->getBirthday()."</option>";
                                }
                                else echo "<option>请选择出生日期</option>"?>


                            </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">所在地</td>
                    <td style="border:0px">
                            <select class="form-control" id =location_province onchange="changeprovince()">
                                <?php
                                if(is_null($user->getProvince())) {
                                    echo "<option > 请选择省份</option >";
                                }
                                else {
                                    echo "<option >".$user->getProvince()."</option >";
                                }
                                ?>
                            </select>
                    </td>
                    <td style="border:0px">
                            <select class="form-control" id =location_city>
                                <?php
                                if(is_null($user->getCity())) {
                                    echo "<option >请选择城市</option >";
                                }
                                else {
                                    echo "<option >".$user->getCity()."</option>";
                                }
                                ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">兴趣</td>
                    <td style="border:0px" colspan="3">
                        <textarea class="form-control" rows="1" style="resize: none;" id="hobby"><?php echo $user->getHobby() ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px " >跑步宣言</td>
                    <td style="border:0px" colspan="3">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" style="resize: none;" id="declaration"><?php echo $user->getDeclaration() ?></textarea>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="4" style="padding:20px">
                        <div class="pull-right">
                            <button type="reset" class="btn btn-default" id="reset" style="padding-left:30px;padding-right:30px">重置</button>
                            <button type="button" class="btn btn-primary" id="save" onclick="editordata('<?php  echo site_url("user/submitedit")?>')"  style="padding-left:30px;padding-right:30px">保存</button>
                        </div>
                    </td>
                </tr>
                </tbody>

            </table>
            </form>
            <form action="<?php echo site_url('user/changephoto')?>" method="post"
                  enctype="multipart/form-data">
            <table class="table table-default" id="avatarTab" style="display:none">
                <caption style="visibility: hidden;">编辑资料2</caption>
                <tbody>
                <tr>
                    <td style="border:0px;padding: 20px;font-family: '幼圆';font-size: large;line-height: 2;" colspan="2">
                        请在下方上传新的头像
                    </td>
                    <td style="border:0px;padding: 20px;font-family: '幼圆';font-size: large;line-height: 2;">
                        下方是您的头像预览
                    </td>
                </tr>
                <tr>
                    <td rowspan="2" colspan="2" style="border:0px;padding: 20px;">
                        <div class="imageBox" style="float: left;">
                            <div class="thumbBox"></div>
                            <div class="spinner" style="display: none">Loading...</div>
                        </div>
                    </td>
                    <td style="border:0px;padding: 20px;">
                        <div class="cropped" style="" id="head1">
                            <img src="<?php echo $user->getPhoto();?>"/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="border:0px;padding: 20px;">
                        <div class="cropped2" style="" id="head2">
                            <img src="<?php echo $user->getPhoto();?>" class="img-circle"/>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 20px;">
                        <a href="javascript:;" class="pic_cut">
                            <input type="file" name ="file" id="file" style="float:left; width: 180px">
                                更换图片
                        </a>
                    </td>
                    <td style="padding: 20px;padding-right: 0px;">
                        <input type="button" id="btnZoomIn"  class="btn btn-primary"
                               value="+">
                        <input type="button" id="btnZoomOut"  class="btn btn-primary"
                               value="-">
                        <input type="button" id="btnCrop" value="剪裁图片"
                               class="btn btn-primary" >
                    </td>
                    <td style="padding: 20px;">
                        <div class="pull-right">
                            <input type="submit"  name="submit" value="确认修改" class="btn btn-primary" />
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
                </form>

        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
</div>

<div style="text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>


<script type="text/javascript">
    $(function() {
        $('#da-thumbs>li').hoverdir();
        $("[data-toggle='tooltip']").tooltip();
    });
</script>



<script type="text/javascript">
    $(window).load(function() {
        var options = {
            thumbBox : '.thumbBox',
            spinner : '.spinner',
            imgSrc : '<?php echo $user->getPhoto()?>'
        }
        var cropper = $('.imageBox').cropbox(options);
        $('#file').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = $('.imageBox').cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $('#btnCrop').on('click', function() {
            var img = cropper.getDataURL();
            $('#head1').empty();
            $('#head2').empty();
            $('#head1').append('<img src="'+img+'" id="head1"/>');
            $('#head2').append('<img src="'+img+'" id="head2" class="img-circle"/>');
        })
        $('#btnZoomIn').on('click', function() {
            cropper.zoomIn();
        })
        $('#btnZoomOut').on('click', function() {
            cropper.zoomOut();
        })

        /*
        初始化一些东西
         */
        var year =document.getElementById("birth_y");
        var month =document.getElementById("birth_m");
        var day =document.getElementById("birth_d");
        var province =document.getElementById("location_province");
        var city =document.getElementById("location_city");
        /*
        初始化年
         */
        if(year.length!=0) {
            var yearoption = year.options[0];
            var yearvalue = year.options[0].value;
            for (var i = 1950; i < 2016; i++) {
                if (yearvalue == i) {
                    var option = new Option(i, i);
                    option.selected = true;
                    year.add(option);
                    year.remove(yearoption);
                }else {
                    var option = new Option(i, i);
                    year.add(option);
                }
            }
        }
        else{
            for (var i = 1950; i < 2016; i++) {
                var option = new Option(i, i);
                year.add(option);
            }
        }

        /*
        初始化月
         */
        if(month.length!=0) {
            var monthoption = month.options[0];
            var monthvalue = month.options[0].value;
            for (var i = 1; i < 13; i++) {
                if (monthvalue == i) {
                    var option = new Option(i, i);
                    option.selected = true;
                    month.add(option);
                    month.remove(monthoption);
                }else {
                    var option = new Option(i, i);
                    month.add(option);
                }
            }
        }
        else{
            for (var i = 1; i < 13; i++) {
                var option = new Option(i, i);
                month.add(option);
            }
        }


        /*
        初始化省
         */

        $.ajax({
            url: "<?php echo site_url("user/getprovince")?>",
            type: "POST",
            data:{},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
                //alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                var obj = eval('(' + data + ')');
                for(var i=0 ; i< obj.length ;i++){
                    var option = new Option(obj[i], obj[i]);
                    province.add(option);
                }
            }
        });

    });

    $('#data').on('click', function() {
        this.className="active";
        document.getElementById('avatar').className="";
        document.getElementById('dataTab').style.display="";
        document.getElementById('avatarTab').style.display="none";
    });

    $('#avatar').on('click', function() {
        this.className="active";
        document.getElementById('data').className="";
        document.getElementById('avatarTab').style.display="";
        document.getElementById('dataTab').style.display="none";
    });


    function changemonth(){
        var month =document.getElementById("birth_m");
        var year =document.getElementById("birth_y");
        var day =document.getElementById("birth_d");
        var monthvalue=month.options[month.options.selectedIndex].value;
        var yearvalue =year.options[month.options.selectedIndex].value;
        if(monthvalue==2){
            if(yearvalue%4==0){
                for(var i=0;i<day.options.length;)
                {
                    day.removeChild(day.options[i]);
                }
                for(var i=1 ; i< 30 ;i++){
                    var option = new Option(i, i);
                    day.add(option);
                }
            }
            else{
                for(var i=0;i<day.options.length;)
                {
                    day.removeChild(day.options[i]);
                }
                for(var i=1 ; i< 29 ;i++){
                    var option = new Option(i, i);
                    day.add(option);
                }
            }
        }
        else if(monthvalue==1||monthvalue==3||monthvalue==5||monthvalue==7||monthvalue==8||monthvalue==10||monthvalue==12){
            for(var i=0;i<day.options.length;)
            {
                day.removeChild(day.options[i]);
            }
            for(var i=1 ; i< 32 ;i++){
                var option = new Option(i, i);
                day.add(option);
            }
        }
        else{
            for(var i=0;i<day.options.length;)
            {
                day.removeChild(day.options[i]);
            }
            for(var i=1 ; i< 31 ;i++){
                var option = new Option(i, i);
                day.add(option);
            }
        }
    }


    function changeprovince(){
            var city =document.getElementById("location_city");
            var province =document.getElementById("location_province");
            var provincevalue =province.value;
        $.ajax({
            url: "<?php echo site_url("user/getcity")?>",
            type: "POST",
            data:{province:provincevalue},
            error: function(XMLHttpRequest, textStatus, errorThrown){
                alert('服务器忙请稍后再试');
                //alert(XMLHttpRequest.status);
               // alert(XMLHttpRequest.readyState);
                //alert(textStatus);
                return false;
            },
            success: function(data,status) {
                if(data!="fail"){
                    for(var k=0;k<city.options.length;)
                    {
                        city.removeChild(city.options[k]);
                    }
                    var obj = eval('(' + data + ')');
                    for(var m=0 ; m< obj.length ;m++){
                        var cityoption = new Option(obj[m], obj[m]);
                        city.add(cityoption);
                    }
                }
                else{
                    for(var i=0;i<city.options.length;)
                    {
                        city.removeChild(city.options[i]);
                    }
                    var option = new Option(provincevalue, provincevalue);
                    city.add(option);
                }
            }
        });
    }

</script>


</body>

</html>