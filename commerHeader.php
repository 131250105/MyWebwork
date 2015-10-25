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
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src=" <?php echo base_url('js/md5.js');?>"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="padding:5px">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#example-navbar-collapse">
            <span class="sr-only">切换导航</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url("welcome/index") ;?>">MyHealth</a>
    </div>
    <div class="collapse navbar-collapse" id="example-navbar-collapse">
        <ul class="nav navbar-nav">
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li class="active"><a href="#">活动</a></li>
            <li><a href="#">建议</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    霸王 <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#">jmeter</a></li>
                    <li><a href="#">EJB</a></li>
                    <li><a href="#">Jasper Report</a></li>
                    <li class="divider"></li>
                    <li><a href="#">分离的链接</a></li>
                    <li class="divider"></li>
                    <li><a href="#">另一个分离的链接</a></li>
                </ul>
            </li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">提交</button>
            </form>
            </li>
            <li style="visibility: hidden"><a href="#">位置调整</a></li>
            <li>
                <?php
                if(isset($_SESSION['userId'])&& isset($_SESSION['userphoto'])) {
                    echo '<a data-toggle="collapse" data-parent="#accordion" href="#demo">'.
                    '<img src="'.$_SESSION['userphoto']. '" alt="First slide" class="img-circle"
                        width="40" height="40" style="padding: 0px"></a></li>';
                }
                else{
                    echo '<a data-toggle="modal" data-target="#submitNewNicknameDiv"
                         data-backdrop="static">登录</a></li><li>
                         <a data-toggle="modal" data-target="#registerNewNicknameDiv"
                         data-backdrop="static">注册</a></li>';
                }   ?>
        </ul>
    </div>
</nav>


        <div id="demo" class="collapse"
             style="position: absolute; margin-left: 1100px; margin-top: 6px; background-color: white">
            <table class="table" border="0">
                <tbody>
                <tr>
                    <td><a href ="<?php echo site_url("user/index"); ?>"><button type="button" class="btn btn-primary" >个人中心</button></a></td>
                </tr>
                <tr>
                    <td><a><div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active"> <input
                                        type="radio" name="options" id="state1"> 注销登陆
                                </label>
                            </div></a></td>
                </tr>
                </tbody>
            </table>
        </div>


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

<script type="text/javascript">
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