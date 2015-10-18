<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/9/15
 */
 header('charset: utf-8;');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel='stylesheet' href='../../css/jquery-ui.css'>
    <link rel='stylesheet prefetch' href='../../css/bootstrap.min.css'>
    <link rel="stylesheet" href="../../css/login.css" media="screen" type="text/css" />
    <link href="../../css/commonHeader.css" rel="stylesheet" type="text/css">
    <script src="../../js/jquery.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
</head>

<body class="login-page">
<?php
include("commonHeader.php");
?>

<div class="login-form">
    <div class="login-content">
        <!--
        <div class="form-login-error">
            <h3>Invalid login</h3>
            <p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
        </div>
        -->
        <center>
            <form method="post" role="form" id="form_login" action="<?php echo site_url("user/login");?>" >
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" class="form-control" name="username" id="username" placeholder="用户名" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-key"></i>
                        </div>
                        <input type="password" class="form-control" name="password" id="password" placeholder="密码" autocomplete="off" />
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-login"  >
                        <i class="fa fa-sign-in"></i>
                        登陆
                    </button>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary btn-block btn-login">
                        &#160;&#160;
                        <i class="fa fa-sign-in"></i>
                        忘记密码
                    </button>
                </div>
            </form>
        </center>
        <div style="text-align:center;clear:both;"></div>
    </div>
</div>

</body>

</html>
