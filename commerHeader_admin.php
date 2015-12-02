<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/18
 * Time: 下午13:56
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/header.css');?>" media="screen" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src=" <?php echo base_url('js/md5.js');?>"></script>
    <script src="<?php echo base_url('js/header.js');?>"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="padding:5px;" id="commonHeaderContainer">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url("welcome/index") ;?>" style="padding-top: 5px;padding-left: 30px;">
            <img src="<?php echo base_url('images/logo.png');?>" class="img-responsive"
                 height="40" style="">
        </a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav" style="font-family: '幼圆';">

            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li><a href="<?php echo site_url("user/userManagement")?>">用户管理</a></li>
            <li style="visibility: hidden"><a>位置调整</a></li>
            <li style="visibility: hidden"><a>位置调整</a></li>
            <li style="visibility: hidden"><a>位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <!--  href="#demo2"  data-toggle="collapse" data-parent="#accordion" href="#demo2"-->
            <li onclick="window.location.href='<?php echo site_url("user/logout");?>'"><a>注销</a></li>
        </ul>
    </div>
</nav>



<script type="text/javascript">
    $('#userImg').on('click', function() {
        $('#dropDownMenu').collapse('toggle')
    });

    function checkId()
    {
        var str=document.getElementById( "registeremail" ).value;
        var   sReg   =   /[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/;
        if   (!sReg.test(str)){
            document.getElementById( "registeremailForm" ).className = "form-group has-error has-feedback";
            document.getElementById( "registeremailIconT" ).style.display = "none";
            document.getElementById( "registeremailIconF" ).style.display = "block";
        }
        else {
            document.getElementById( "registeremailForm" ).className = "form-group has-success has-feedback";
            document.getElementById( "registeremailIconF" ).style.display = "none";
            document.getElementById( "registeremailIconT" ).style.display = "block";
        }
    }
    function checkPassword()
    {
        var str=document.getElementById( "registerpassword" ).value;
        if(str.length<6||str.length>15){
            document.getElementById( "registerpasswordForm" ).className = "form-group has-error has-feedback";
            document.getElementById( "registerpasswordIconT" ).style.display = "none";
            document.getElementById( "registerpasswordIconF" ).style.display = "block";
        }
        else {
            document.getElementById( "registerpasswordForm" ).className = "form-group has-success has-feedback";
            document.getElementById( "registerpasswordIconF" ).style.display = "none";
            document.getElementById( "registerpasswordIconT" ).style.display = "block";
        }
    }
    function checkPasswordConfirm()
    {
        var str=document.getElementById( "registerpassword" ).value;
        var str2=document.getElementById( "registerpasswordConfirm" ).value;
        if(str!=str2){
            document.getElementById( "registerpasswordConfirmForm" ).className = "form-group has-error has-feedback";
            document.getElementById( "registerpasswordConfirmIconT" ).style.display = "none";
            document.getElementById( "registerpasswordConfirmIconF" ).style.display = "block";
        }
        else {
            document.getElementById( "registerpasswordConfirmForm" ).className = "form-group has-success has-feedback";
            document.getElementById( "registerpasswordConfirmIconF" ).style.display = "none";
            document.getElementById( "registerpasswordConfirmIconT" ).style.display = "block";
        }
    }
    function checkUsername()
    {
        var str=document.getElementById( "username" ).value;
        if(!str.length>0){
            document.getElementById( "usernameForm" ).className = "form-group has-error has-feedback";
            document.getElementById( "usernameIconT" ).style.display = "none";
            document.getElementById( "usernameIconF" ).style.display = "block";
        }
        else {
            document.getElementById( "usernameForm" ).className = "form-group has-success has-feedback";
            document.getElementById( "usernameIconF" ).style.display = "none";
            document.getElementById( "usernameIconT" ).style.display = "block";
        }
    }
</script>


</body>
</html>