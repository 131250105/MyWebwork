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
    <link href="<?php echo base_url('css/default.css');?>" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/chart_normalize.css');?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/chart_default.css');?>">
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src="<?php echo base_url('js/raphael.js');?>" type="text/javascript"></script>
    <script src="<?php echo base_url('js/init.js');?>" type="text/javascript"></script>

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
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 400%;">

<div class="container">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="padding-right: 50px;">
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="line-height: 2;font-size: xx-large;font-family:'华文中宋';">运动管理</p>
                </div>
            </div>
            <div class="row" >
                <p style="visibility: hidden">位置调整</p>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active" style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/userindex")?>" style="color: #fff;background-color: #337ab7;"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;我的运动</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/administration")?>" style="color: #337ab7;text-decoration: none;background-color: transparent;"><span class="glyphicon glyphicon-headphones"></span>&nbsp;&nbsp;&nbsp;身体管理</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/track")?>" style="color: #337ab7;text-decoration: none;background-color: transparent;"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;健身追踪器</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/sleepAnalysis")?>" style="color: #337ab7;text-decoration: none;background-color: transparent;"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;睡眠分析</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
        </div>
        <table class="table table-responsive">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">你本周的健康状况</caption>
            <tbody>
            <tr>
                <td style="vertical-align:middle" colspan="5">
                    <div id="content" style="position: relative;top: 0px;left: 0px;
                    margin: 0px 0 0 0px;width:100%;height: 100%;">
                        <div class="col-xs-6 col-sm-6">
                            <div class="legend" style="width: 50%;">
                                <h1>Legend:</h1>
                                <div class="skills">
                                    <ul>
                                        <li class="css">健康BMI</li>
                                        <li class="jq">运动目标完成</li>
                                        <li class="html">健康睡眠</li>
                                       <!-- <li class="php">PHP</li>
                                        <li class="sql">MySQL</li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <div id="diagram" style="height: 450px;"></div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="get">
                            <div class="arc">
                                <span class="text">健康BMI(20.8)</span>
                                <input type="hidden" class="percent" value="<?php echo $data[0]->BMI; ?>" />
                                <input type="hidden" class="color" value="#D84F5F" />
                            </div>
                            <div class="arc">
                                <span class="text">运动目标完成</span>
                                <input type="hidden" class="percent" value="<?php echo $data[0]->usefulexercise*100; ?>" />
                                <input type="hidden" class="color" value="#97BE0D" />
                            </div>
                            <div class="arc">
                                <span class="text">健康睡眠</span>
                                <input type="hidden" class="percent" value="<?php echo $data[0]->healthsleep*100; ?>" />
                                <input type="hidden" class="color" value="#88B8E6" />
                            </div>
                        </div>
                    </div>
                </td>
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
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-repeat" style="font-size:x-large"></span></th>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-glass" style="font-size:x-large"></span></th>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-tint" style="font-size:x-large"></span></th>
            <th style="text-align:center;vertical-align:middle"><span class="glyphicon glyphicon-star" style="font-size:x-large"></span></th>
            <tr>
                <td style="text-align:center;vertical-align:middle" width="25%">
                    <div class="counter col_fourth" style="float: none;">
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">绕环形跑道</p>
                        <h2 class="timer count-title" id="count-number" data-to="1000" data-speed="1125"></h2>
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">圈</p>
                    </div>
                </td>
                <td style="text-align:center;vertical-align:middle" width="25%">
                    <div class="counter col_fourth" style="float: none;">
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">消耗肥肉</p>
                        <h2 class="timer count-title" id="count-number" data-to="450" data-speed="128"></h2>
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">公斤</p>
                    </div>
                </td>
                <td style="text-align:center;vertical-align:middle" width="25%">
                    <div class="counter col_fourth" style="float: none;">
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">省93#汽油</p>
                        <h2 class="timer count-title" id="count-number" data-to="120" data-speed="233"></h2>
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">升</p>
                    </div>
                </td>
                <td style="text-align:center;vertical-align:middle" width="25%">
                    <div class="counter col_fourth" style="float: none;">
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">60W灯泡亮</p>
                        <h2 class="timer count-title" id="count-number" data-to="120" data-speed="417"></h2>
                        <p class="count-text " style="font-family: '微软雅黑';font-size: large;">小时</p>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <div class="col-xs-12 col-sm-12"
             style="">
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">
                    全网排名
                    <hr/>
                </div>
            </div>
            <?php $c=0;
            foreach($userlist as $item){
                $c++;?>
                <div class="row" style="height: 50px; ">
                    <div class="col-xs-1 col-sm-1"
                         style="">
                        <span style="font-size: 27px;line-height: 60px;vertical-align: middle;"><?php echo $c ?></span>
                    </div>
                    <div class="col-xs-1 col-sm-1"
                         style="">
                        <img src="<?php echo $item->photo?>"
                             class="img-rounded" width="140%"  style="vertical-align: top">
                    </div>
                    <div class="col-xs-9 col-sm-9"
                         style="">
                        <span style="font-size: 23px;line-height: 60px;vertical-align: middle"><?php echo $item->username?></span>
                    </div>
                </div>
                <hr/>
            <?php } ?>
        </div>

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