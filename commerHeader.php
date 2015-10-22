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
</head>
<body>

<ul class="nav nav-pills"
    style="padding: 5px; background-color: black; position: fixed; width: 100%">
    <li><a href="#" style="padding: 0px;background-color: black;"><img src = "<?php echo base_url('images/logo.png');?>" alt="First slide"
                                                                       class="img-rounded" width="300" height="40"
                                                                       style="margin-right: 100px"></a></li>
    <li class="active"><a href="#">Home</a></li>
    <li><a href="#">SVN</a></li>
    <li><a href="#">iOS</a></li>
    <li><a href="#">VB.Net</a></li>
    <li class="dropdown"><a class="dropdown-toggle"
                            data-toggle="dropdown" href="#"> Java <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
            <li><a href="#">Swing</a></li>
            <li><a href="#">jMeter</a></li>
            <li><a href="#">EJB</a></li>
            <li class="divider"></li>
            <li><a href="#">分离的链接</a></li>
        </ul></li>
    <li><a href="#">PHP</a></li>
    <div align="right">
        <a data-toggle="collapse" data-parent="#accordion" href="#demo">
            <img src="<?php echo base_url('images/logo.png');?>" alt="First slide" class="img-circle"
                 width="40" height="40" style="margin-right: 100px">
        </a>
        <a data-toggle="modal" data-target="#submitNewNicknameDiv"
           style="margin-right: 80px"	data-backdrop="static">登录</a>
        <a data-toggle="modal" data-target="#registerNewNicknameDiv"
           style="margin-right: 80px"	data-backdrop="static">注册</a>
        <div id="demo" class="collapse"
             style="position: absolute; margin-left: 1100px; margin-top: 6px; background-color: white">
            <table class="table" border="0">
                <tbody>
                <tr>
                    <td><a><button type="button" class="btn btn-primary">点此让土豪变成傻逼</button></a></td>
                </tr>
                <tr>
                    <td><a><div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active"> <input
                                        type="radio" name="options" id="state1"> 单身
                                </label> <label class="btn btn-primary"> <input type="radio"
                                                                                name="options" id="state2"> 热恋中
                                </label> <label class="btn btn-primary"> <input type="radio"
                                                                                name="options" id="state3"> 已结婚
                                </label>
                            </div></a></td>
                </tr>
                <tr>
                    <td><a>3</a></td>
                </tr>
                <tr>
                    <td><a>4</a></td>
                </tr>
                <tr>
                    <td><a>5</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</ul>

<div class="modal fade" id="submitNewNicknameDiv" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="width:430px;margin-left: 100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">账号登录</h4>
            </div>
            <div class="alert alert-warning"  id="emptyLoginTip_id" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名为空</div>
            <div class="alert alert-warning"  id="emptyLoginTip_password" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;密码为空</div>
            <div class="alert alert-danger"  id="errorLoginTip" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名或密码错误</div>
            <form class="form-horizontal" role="form"  style="padding:30px 50px;width:500px" ">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email"
                           placeholder="邮箱">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="loginpassword"
                           placeholder="密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-3"  style="margin-left: 0px;">
                    <div class="checkbox"  style="float:left">
                        <label> <input type="checkbox"> 记住我
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" align="left">
                    <button type="button" class="btn btn-primary" onclick="login()" style="width: 330px;margin-left: -70px;">登录</button>
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
    <div class="modal-dialog">
        <div class="modal-content" style="width:430px;margin-left: 100px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">账号注册</h4>
            </div>

            <form class="form-horizontal" role="form"  style="padding:30px 50px;width:500px">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="registeremail"
                           placeholder="邮箱">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="registerpassword"
                           placeholder="密码">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="username"
                           placeholder="昵称">
                </div>
            </div>
            <div class="form-group">
                <label for="name" style=" margin-left: 16px;">用户类型</label>
                <select class="form-control" style=" width: 327px; margin-left: 16px;" id =usertype>
                    <option>普通用户</option>
                    <option>健康教练</option>
                    <option>医生</option>
                </select>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10" align="left">
                    <button type="button" class="btn btn-primary" onclick="register()" style="width: 330px;margin-left: -70px;">注册</button>
                </div>
            </div>
            </form>


        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>



</body>
</html>