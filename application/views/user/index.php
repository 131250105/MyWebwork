<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/18
 * Time: 下午13:58
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
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
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
<body>


<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-3"style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;visibility: hidden">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="row" >
        <div class="col-xs-6 col-sm-3"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <div class="row" >
                <div class="col-xs-6 col-sm-4.8"
                     style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo $user->getPhoto();?>"
                         class="img-responsive"  alt="Cinque Terre">
                    <p style="visibility: hidden">位置调整</p>
                    </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p style="visibility: hidden">位置调整</p>
                    <p>昵称：<?php echo $user->getusername();?></p>
                    <p>性别：<?php echo $user->getSex();?></p>
                    <p>学校：</p>
                    <p>地址：<?php echo $user->getAddress();?></p>
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-user"></span></span>编辑资料
                    </button>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                    </div>
            </div>
            <div class="row" >
                <p style="visibility: hidden">位置调整</p>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">SVN</a></li>
                    <li><a href="#">iOS</a></li>
                    <li><a href="#">VB.Net</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">PHP</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-9"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <p style="visibility: hidden">位置调整</p>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">SVN</a></li>
                <li><a href="#">iOS</a></li>
                <li><a href="#">VB.Net</a></li>
                <li><a href="#">Java</a></li>
                <li><a href="#">PHP</a></li>
            </ul>
            <p style="line-height:3;font-size: xx-large;">暂时没有消息哦</p>
        </div>
    </div>
</div>

</body>

</html>
