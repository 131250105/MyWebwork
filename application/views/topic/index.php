<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/10/30
 * Time: 下午18:40
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

        table {
        }

        th {
            font-size: 18px;
        }

        td {
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background-color:#f3f3f3">


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
                        <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;我的运动</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-headphones"></span>&nbsp;&nbsp;&nbsp;身体管理</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;健身追踪器</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;睡眠分析</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;健康骑行</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <table class="table table-responsive">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">你本周的健康状况</caption>
            <thead style="text-align:center">
            <tr>
                <th>标题/图片</th>
                <th style="vertical-align:middle;text-align: center">参与人数</th>
                <th style="vertical-align:middle;text-align: center">活动类型</th>
                <th style="vertical-align:middle;text-align: center">距开始还有</th>
                <th style="vertical-align:middle;text-align: center">备注</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                         width="100px" >
                    <a id="test">鼓楼多人越野活动</a>
                </td>
                <td style="vertical-align:middle;text-align: center">0/40</td>
                <td style="vertical-align:middle;text-align: center">跑步</td>
                <td style="vertical-align:middle;text-align: center">约2个月</td>
                <td style="vertical-align:middle;text-align: center">无</td>
            </tr>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                         width="100px" >
                    鼓楼篮球对抗赛
                </td>
                <td style="vertical-align:middle;text-align: center">0/12</td>
                <td style="vertical-align:middle;text-align: center">篮球</td>
                <td style="vertical-align:middle;text-align: center">约1个月</td>
                <td style="vertical-align:middle;text-align: center">无</td>
            </tr>
            </tbody>
        </table>

        <table class="table table-responsive">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">你注册以来的运动总量</caption>
            <tbody>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-fire" style="font-size:x-large"></span></th>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-road" style="font-size:x-large"></span></th>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-flag" style="font-size:x-large"></span></th>
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
            </tbody>
        </table>

        <table class="table table-responsive">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">这些运动量可以</caption>
            <tbody>
            <tr>
                <td style="vertical-align:middle;text-align: center" width="25%">0/40</td>
                <td style="vertical-align:middle;text-align: center" width="25%">跑步</td>
                <td style="vertical-align:middle;text-align: center" width="25%">约2个月</td>
                <td style="vertical-align:middle;text-align: center" width="25%">无</td>
            </tr>
            </tbody>
        </table>

        <div class="col-xs-6 col-sm-6"
             style="">
            <table class="table table-responsive" width="50%">
                <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">全网排名</caption>
                <thead style="text-align:center">
                <tr>
                    <th>标题/图片</th>
                    <th style="vertical-align:middle;text-align: center">参与人数</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                             width="100px" >
                        <a id="test">鼓楼多人越野活动</a>
                    </td>
                    <td style="vertical-align:middle;text-align: center">0/40</td>
                </tr>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                             width="100px" >
                        鼓楼篮球对抗赛
                    </td>
                    <td style="vertical-align:middle;text-align: center">0/12</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="col-xs-6 col-sm-6"
             style="">
            <table class="table table-responsive" width="50%">
                <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">朋友圈排名</caption>
                <thead style="text-align:center">
                <tr>
                    <th>标题/图片</th>
                    <th style="vertical-align:middle;text-align: center">参与人数</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                             width="100px" >
                        <a id="test">鼓楼多人越野活动</a>
                    </td>
                    <td style="vertical-align:middle;text-align: center">0/40</td>
                </tr>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                             width="100px" >
                        鼓楼篮球对抗赛
                    </td>
                    <td style="vertical-align:middle;text-align: center">0/12</td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>

<script src=" <?php echo base_url('js/countToNumFun.js');?>"></script>

</body>

</html>