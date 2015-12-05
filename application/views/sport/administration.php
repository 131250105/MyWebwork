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

    <script src="<?php echo base_url('application/views/sport/jqplot.js');?>"></script>

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
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/userindex")?>"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;我的运动</a></li>
                    <li class="active" style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/administration")?>"><span class="glyphicon glyphicon-headphones"></span>&nbsp;&nbsp;&nbsp;身体管理</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/track")?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;健身追踪器</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/sleepAnalysis")?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;睡眠分析</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="<?php echo site_url("sport/ride")?>"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;健康骑行</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"  style="color: #777;padding:30px;font-family: '华文中宋';font-size: x-large;line-height: 2;">
                    身体管理
                </div>
            </div>
            <div class="row">
                <div id="chart1"></div>
            </div>
            <div class="row">
                <div id="chart2"></div>
            </div>
            <table class="table table-responsive">
                <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">身体管理</caption>
                <tbody>

                </tbody>
            </table>
            <table class="table table-responsive">
                <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">详细数据</caption>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
</div>

<div style="position: absolute;bottom: 0px;width: 100%;text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>

<script src=" <?php echo base_url('js/countToNumFun.js');?>"></script>
<script type="text/javascript">

    var data = [[1,2,3,4,5,6,7,8,9],[3,6,8,1,11,22,4,21,6]];
    var data_max = 30; //Y轴最大刻度
    var line_title = ["A","B"]; //曲线名称
    var y_label = "这是Y轴"; //Y轴标题
    var x_label = "这是X轴"; //X轴标题
    var x = [1,2,3,4,5,6,7,8,9]; //定义X轴刻度值
    var title = "这是标题"; //统计图标标题
    j.jqplot.diagram.base("chart1", data, line_title, "这是统计标题", x, x_label, y_label, data_max, 1);
    j.jqplot.diagram.base("chart2", data, line_title, "这是统计标题", x, x_label, y_label, data_max, 2);

</script>

</body>

</html>