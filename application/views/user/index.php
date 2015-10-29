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
    <link href="<?php echo base_url('css/normalize.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('css/countToNum.css');?>" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
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
<body  style="background-color:#f3f3f3">


<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-3">
            <div class="row" >
                <div class="col-xs-6 col-sm-4.8"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo $user->getPhoto();?>"
                         class="img-responsive"  alt="Cinque Terre">
                    <p style="visibility: hidden">位置调整</p>
                    </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <p style="font-family: '微软雅黑';">昵称：<?php echo $user->getusername();?></p>
                    <p style="font-family: '微软雅黑';">性别：<?php echo $user->getSex();?></p>
                    <p style="font-family: '微软雅黑';">年龄：</p>
                    <p style="font-family: '微软雅黑';">所在地：<?php echo $user->getProvince().$user->getCity();?></p>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <a href ="<?php echo site_url("user/edit");?>" style="text-decoration: none;"><button type="button" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编辑资料
                        </button></a>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <table class="table">
                        <caption style="line-height: 2;">活动推荐</caption>
                        <tbody>
                        <tr>
                            <td style="text-align: center;padding:30px;background-color:#f3f3f3">
                                <img src="<?php echo base_url('images/main.png');?>" class="img-responsive" alt="Cinque Terre" width="100%" align="center">
                                <label style="padding-top:10px;">鼓楼多人越野活动</label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <p style="visibility: hidden">位置调整</p>
            <table class="table table-striped">
                <caption style="
                text-align: center;
                font-family: '华文中宋';
                font-size: x-large;
                line-height: 2;
                ">我注册以来</caption>
                <thead style="text-align:center">
                <tr>
                    <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-fire" style="font-size:x-large"></span></th>
                    <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-road" style="font-size:x-large"></span></th>
                    <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-flag" style="font-size:x-large"></span></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="text-align:center;vertical-align:middle" width="33%">
                        <div class="counter col_fourth" style="float: none;">
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">共燃烧</p>
                            <h2 class="timer count-title" id="count-number" data-to="1000" data-speed="1500"></h2>
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">大卡</p>
                        </div>
                    </td>
                    <td style="text-align:center;vertical-align:middle" width="33%">
                        <div class="counter col_fourth" style="float: none;">
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">共行走</p>
                            <h2 class="timer count-title" id="count-number" data-to="450" data-speed="1500"></h2>
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">公里</p>
                        </div>
                    </td>
                    <td style="text-align:center;vertical-align:middle" width="33%">
                        <div class="counter col_fourth" style="float: none;">
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">已运动</p>
                            <h2 class="timer count-title" id="count-number" data-to="120" data-speed="1500"></h2>
                            <p class="count-text " style="font-family: '微软雅黑';font-size: large;">天</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="padding: 50px;">
                        <div id="myCarousel" class="carousel slide">
                            <!-- 轮播（Carousel）指标 -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- 轮播（Carousel）项目 -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="<?php echo base_url('images/main3.png');?>" alt="First slide">
                                    <div class="carousel-caption">标题 1</div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url('images/main1.png');?>" alt="Second slide">
                                    <div class="carousel-caption">标题 2</div>
                                </div>
                                <div class="item">
                                    <img src="<?php echo base_url('images/main2.png');?>" alt="Third slide">
                                    <div class="carousel-caption">标题 3</div>
                                </div>
                            </div>
                            <!-- 轮播（Carousel）导航 -->
                            <a class="carousel-control left" href="#myCarousel"
                               data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel"
                               data-slide="next">&rsaquo;</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="background-color: #E9E9E9;padding: 15px;">
                        <form role="form">
                            <div class="form-group">
                                <label for="name"  style="font-size: large;line-height: 2;">我想说...</label>
                                <textarea class="form-control" rows="3" style="resize: none;"></textarea>
                            </div>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="padding: 15px;font-size: large;line-height: 2;">话题</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <div class="col-xs-1 col-sm-1"
                             style="">
                            <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" alt="First slide" height="40px">
                        </div>
                        <div class="col-xs-11 col-sm-11"
                             style="">
                            <div class="row">
                                咕咚小编
                            </div>
                            <div class="row">
                                如果你要避免膝关节磨损，但还想减脂，战绳（Battle ropes）就是最佳选择！它长期被用于NBA、MLB、NFL、综合格斗MMA等训练中，这项训练能训练到的不单只是增加肌肉力量，同时也会训练到核心肌群、稳定性、协调性、心肺适能、爆发力和耐力！感兴趣的咚友不妨试试，据说练过的都会爱上哦~最后，感谢@集美健身教练阿贵 友情赞助的帅图，有健身方面的疑问大家可以找他哟！
                            </div>
                            <div class="row">
                                2015-10-29 <span style="float:right">赞</span>
                            </div>

                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src=" <?php echo base_url('js/countToNumFun.js');?>"></script>

</body>

</html>
