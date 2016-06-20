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
    <link href="<?php echo base_url('css/test.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/header.css');?>" media="screen" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src=" <?php echo base_url('js/md5.js');?>"></script>
    <script src="<?php echo base_url('js/header.js');?>"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="padding: 5px;
    opacity: 5;
    background-color: rgba(228, 228, 228, 0);
    box-shadow: rgba(27, 178, 0, 0.1) 0 1px 2px;
    border-color: rgba(0, 0, 0, 0.53);" id="commonHeaderContainer">
    <div class="popWindow" style="display: block;">
    </div>
    <div style="z-index:2">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav" style="font-family: '幼圆';">

                <li><a class="navbar-brand" href="<?php echo site_url("welcome/index") ;?>" style="padding-top: 5px;padding-left: 30px;">
                    <img src="<?php echo base_url('images/logo2.png');?>" class="img-responsive"
                        onmouseover="this.src='<?php echo base_url('images/logo2_h.png');?>'"
                         onmouseout="this.src='<?php echo base_url('images/logo2.png');?>'"
                         height="40" style="">
                </a></li>
                <li><a onmouseout="this.style.color='black'" onmouseover="this.style.color='white'"
                       href="<?php echo site_url("sport/userindex")?>"
                       style="font-size: 16px;color:black">运动管理</a></li>
                <li><a onmouseout="this.style.color='black'" onmouseover="this.style.color='white'"
                       href="<?php echo site_url("activity/userindex")?>"
                       style="font-size: 16px;color:black">活动专区</a></li>
                <li><a onmouseout="this.style.color='black'" onmouseover="this.style.color='white'"
                       href="<?php echo site_url("advice/userindex")?>"
                       style="font-size: 16px;color:black">建议专区</a></li>
                <li style="visibility: hidden;"><a>位置调整</a></li>
                <li style="visibility: hidden;"><a>位置调整</a></li>
                <li>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            Go!
                        </button>
                    </span>
                        </div>
                    </form>
                </li>
                <!--  href="#demo2"  data-toggle="collapse" data-parent="#accordion" href="#demo2"-->

                    <?php
                    if(isset($_SESSION['userId'])&& isset($_SESSION['userphoto'])) {
                        echo '<li style="visibility: hidden;"><a>位置调整</a></li>
                              <li style="visibility: hidden;"><a>位置调整</a></li>
                              <li style="visibility: hidden;"><a>位置调整</a></li>'.
                            '<li><a style="padding: 5px" href="javascript:;void(0)">'.
                            '<img src="'.$_SESSION['userphoto']. '" alt="First slide" class="img-circle"
                        width="40" height="40" style="padding: 0px" id="userImg"></a></li>';
                    }
                    else{
                        echo '<li style="visibility: hidden;"><a>位置调整</a></li>'.
                        '<li><a data-toggle="modal" data-target="#submitNewNicknameDiv"
                         data-backdrop="static" style="font-size: 16px;color:black" href="javascript::void(0)"
                          onmouseout="this.style.color=\'black\'" onmouseover="this.style.color=\'white\'">登录</a></li><li>
                         <a data-toggle="modal" data-target="#registerNewNicknameDiv"
                         data-backdrop="static" style="font-size: 16px;color:black" href="javascript::void(0)"
                         onmouseout="this.style.color=\'black\'" onmouseover="this.style.color=\'white\'">注册</a></li><li>
                         <a style="font-size: 16px;color:black" onmouseout="this.style.color=\'black\'"
                         onmouseover="this.style.color=\'white\'" href="';
                        echo site_url("admin/login");
                        echo '">管理员入口</a></li>';
                    }   ?>
            </ul>
        </div>
    </div>
</nav>





<div class="modal fade" id="submitNewNicknameDiv" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" align="center">
        <div class="modal-content"  align="left" style="width:400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">账号登录</h4>
            </div>
            <div class="alert alert-warning"  id="emptyLoginTip_id" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名为空</div>
            <div class="alert alert-warning"  id="emptyLoginTip_password" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;密码为空</div>
            <div class="alert alert-danger"  id="errorLoginTip" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名或密码错误</div>
            <form class="form-horizontal" role="form"  style="padding:30px 50px;">
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="email"
                           placeholder="邮箱">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="loginpassword"
                           placeholder="密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="email">用户类型</label>
                    <select class="form-control" id =logintype>
                         <option>普通用户</option>
                         <option>健康教练</option>
                         <option>医生</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <div class="checkbox">
                        <label> <input type="checkbox" id="remember"> 记住我
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <button type="button" class="btn btn-primary btn-block"
                            onclick="login()" style="">登录</button>
                </div>
            </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>

<div class="modal fade" id="registerNewNicknameDiv" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" align="center">
        <div class="modal-content"  align="left" style="width:400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">账号注册</h4>
            </div>

            <form class="form-horizontal" role="form"  style="padding:30px 50px;">
            <div class="form-group" id="registeremailForm" style="display:block">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="registeremail"
                           onchange="checkId()" placeholder="邮箱">
                    <span class="glyphicon glyphicon-ok form-control-feedback" id="registeremailIconT"
                          aria-hidden="true" style="display:none"></span>
                    <span class="glyphicon glyphicon-remove form-control-feedback" id="registeremailIconF"
                          aria-hidden="true" style="display:none"></span>
                </div>
            </div>
            <div class="form-group" id="registerpasswordForm">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="registerpassword"
                          onchange="checkPassword()" placeholder="密码">
                    <span class="glyphicon glyphicon-ok form-control-feedback" id="registerpasswordIconT"
                          aria-hidden="true" style="display:none"></span>
                    <span class="glyphicon glyphicon-remove form-control-feedback" id="registerpasswordIconF"
                          aria-hidden="true" style="display:none"></span>
                </div>
            </div>
            <div class="form-group" id="registerpasswordConfirmForm">
                <div class="col-sm-12">
                    <input type="password" class="form-control" id="registerpasswordConfirm"
                          onchange="checkPasswordConfirm()" placeholder="确认密码">
                    <span class="glyphicon glyphicon-ok form-control-feedback" id="registerpasswordConfirmIconT"
                          aria-hidden="true" style="display:none"></span>
                    <span class="glyphicon glyphicon-remove form-control-feedback" id="registerpasswordConfirmIconF"
                          aria-hidden="true" style="display:none"></span>
                </div>
            </div>
            <div class="form-group" id="usernameForm">
                <div class="col-sm-12">
                    <input type="text" class="form-control" id="username"
                          onchange="checkUsername()" placeholder="昵称">
                    <span class="glyphicon glyphicon-ok form-control-feedback" id="usernameIconT"
                          aria-hidden="true" style="display:none"></span>
                    <span class="glyphicon glyphicon-remove form-control-feedback" id="usernameIconF"
                          aria-hidden="true" style="display:none"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name">性别</label>
                       <select class="form-control" id =usersex>
                           <option>男</option>
                           <option>女</option>
                       </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <label for="name">用户类型</label>
                       <select class="form-control" id =usertype>
                          <option>普通用户</option>
                          <option>健康教练</option>
                          <option>医生</option>
                       </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12" align="left">
                    <button type="button" class="btn btn-primary btn-block" onclick="register()">注册</button>
                </div>
            </div>
            </form>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>


<div id="dropDownMenu" class="collapse"
     style="position: absolute; right: 0px;top: 30px;z-index: 999">
    <ul class="ul_h">
        <!-- class="li_h_a"  有已激活效果
        <li class="li_h"><i class="fa fa-envelope fa-lg"></i> Inbox <span class="unread">2</span></li>
        以上是未读效果
        -->
        <li class="li_h" onclick="toUserIndex()"><i class="fa fa-home fa-lg"></i> 个人中心</li>
        <li class="li_h" onclick="window.location.href='<?php echo site_url("user/friends"); ?>'"<i class="fa fa-envelope fa-lg"></i> 好友 </li>
        <li class="li_h" onclick="window.location.href='<?php echo site_url("user/interestCircle"); ?>'"><i class="fa fa-envelope fa-lg"></i> 圈子 </li>
        <li class="li_h" onclick="window.location.href='<?php echo site_url("user/logout"); ?>'"><i class="fa fa-user fa-lg"></i> 注销</li>
    </ul>
</div>


<script type="text/javascript">
    $('#userImg').on('click', function() {
        $('#dropDownMenu').collapse('toggle')
    });
function toUserIndex()
{
    $('#dropDownMenu').collapse('toggle');
    window.location.href='<?php echo site_url("user/index"); ?>';
}
    function toFriends()
    {
        $('#dropDownMenu').collapse('toggle');
        window.open('<?php echo site_url("user/friends"); ?>');
    }
    function toLogout()
    {
        $('#dropDownMenu').collapse('toggle');
        window.open('<?php echo site_url("user/logout"); ?>');
    }
function checkId()
{
    var str=document.getElementById( "registeremail" ).value;
    var   sReg   =   /[_a-zA-Z\d\-\.]+@[_a-zA-Z\d\-]+(\.[_a-zA-Z\d\-]+)+$/;
    if   (!sReg.test(str)){
        alert("请输入正确邮箱格式哦!");
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

    if(str.length<6){
        alert("您的密码长度过短!");
        document.getElementById( "registerpasswordForm" ).className = "form-group has-error has-feedback";
        document.getElementById( "registerpasswordIconT" ).style.display = "none";
        document.getElementById( "registerpasswordIconF" ).style.display = "block";
    }

    else if(str.length>15){
        alert("您的密码长度过长!");
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