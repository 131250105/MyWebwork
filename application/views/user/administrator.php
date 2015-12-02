<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/2
 * Time: 16:09
 */
include_once("bean/userbean.php");
include_once('commerHeader_admin.php');
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
    <script src=" <?php echo base_url('js/topic.js');?>"></script>
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
                <?php
                include_once('leftColumn.php');
                ?>
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
                                <img src="<?php echo base_url('images/main.png');?>" class="img-responsive" width="100%" align="center">
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
            <table class="table table-deafult">
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
                            <br class="form-group">
                            <label for="name"  style="font-size: large;line-height: 2;">我想说...</label>
                            <textarea class="form-control" rows="3" style="resize: none;" id ="context"></textarea>
                            <br/>
                            <button type="button" class="btn btn-primary pull-right" align="right" onclick="publishtopic('<?php echo site_url("topic/publishtopic")?> ')">提交</button>
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
                        <p>小编</p>
                    </div>
                    <div class="row">
                        <p>万众瞩目的鼓楼多人越野赛日程已上线，详情请关注活动专区！</p>
                    </div>
                    <div class="row">
                        2015-10-29 15:15<a style="float:right">赞(<span>15</span>)</a>
                    </div>
                </div>
            </td>
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
                        <p>小编</p>
                    </div>
                    <div class="row">
                        <p>鼓楼篮球对抗赛将于期末考试结束后不就开始，你们准备好了没？</p>
                    </div>
                    <div class="row">
                        2015-10-27 14:10<a style="float:right">赞(<span>18</span>)</a>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <button type="button" class="btn btn-primary btn-block">更多话题</button>
                </div>
            </td>
        </tr>
        </tbody>
        </table>
    </div>
</div>
<div class="row">
    <p style="visibility: hidden">位置调整</p>
</div>
</div>

<div style="text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>

<script src=" <?php echo base_url('js/countToNumFun.js');?>"></script>

</body>

</html>
