<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/9/16
 * Time: 下午13:11
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top" id="nav_top">
    <div class="navbar-header">
        <a class="navbar-brand" href="test.php">MywebWork</a>
    </div>

    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left" id="nav_left">
            <li id="navli1"><a href="test.php">问题专区</a></li>
            <li id="navli2"><a href="test.php">经验分享</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php
            echo ' <li id="navli4"><a href="user_user_login.php" >登陆</a></li> ';
            echo ' <li id="navli5"><a href="register.php" >注册</a></li> ';
            ?>
        </ul>

    </div>
</nav>
