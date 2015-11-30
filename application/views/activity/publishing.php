<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/11/01
 * Time: 下午14:20
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
    <link href="<?php echo base_url('css/bootstrap-datetimepicker.min.css');?>" rel="stylesheet">
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap-datetimepicker.js');?>"></script>
    <script src=" <?php echo base_url('js/bootstrap-datetimepicker.fr.js');?>"></script>

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
            padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background-color:#f3f3f3">


<div class="container">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="">
            <div class="row">
                <div class="col-xs-6 col-sm-4.8"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <p style="font-family: '微软雅黑';">昵称：</p>
                    <p style="font-family: '微软雅黑';">性别：</p>
                    <p style="font-family: '微软雅黑';">年龄：</p>
                    <p style="font-family: '微软雅黑';">所在地：</p>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <button type="button" class="btn btn-primary btn-block" onclick="window.open('<?php echo site_url("activity/publishing"); ?>');">
                        <span class="glyphicon glyphicon-flag"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发起活动
                    </button>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="<?php echo site_url("activity/userindex")?>">活动一览</a></li>
                        <li><a href="<?php echo site_url("activity/search")?>">活动搜索</a></li>
                        <li><a href="<?php echo site_url("activity/joined")?>">我参与的活动</a></li>
                        <li><a href="<?php echo site_url("activity/published")?>">我发布的活动</a></li>
                        <li><a href="<?php echo site_url("activity/collected")?>">我收藏的活动</a></li>
                    </ul>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <table class="table table-hover">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">发起活动</caption>
            <tbody>
            <tr>
                <td style="padding-left: 30px;">
                    活动名
                </td>
                <td style="vertical-align:middle;text-align: center" colspan="5">
                    <input  type="text" class="form-control" placeholder="活动名" id="name">
                </td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">
                    活动介绍
                </td>
                <td style="vertical-align:middle;text-align: center" colspan="5">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" style="resize: none;" id="intro"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">
                    时间
                </td>
                <td style="vertical-align:middle;text-align: center">
                    <input size="16" type="text" value="" readonly class="form_datetime" id="starttime"
                           style="display: block;width: 100%;height: 34px;padding: 6px 12px;
                           font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
                           background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                </td>
                <td style="vertical-align:middle;text-align: center">
                    至
                </td>
                <td style="vertical-align:middle;text-align: center">
                    <input size="16" type="text" value="" readonly class="form_datetime" id="endtime"
                           style="display: block;width: 100%;height: 34px;padding: 6px 12px;
                           font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
                           background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                </td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">
                    地点
                </td>
                <td style="vertical-align:middle;text-align: center" colspan="5">
                    <input  type="text" class="form-control" placeholder="地点" id="location">
                </td>
            </tr>
            <tr>
                <td style="padding-left: 30px;">
                    备注
                </td>
                <td style="vertical-align:middle;text-align: center" colspan="5">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" style="resize: none;" id="beizhu"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="6" style="padding:20px">
                    <div class="pull-right">
                        <button type="button" class="btn btn-default" style="padding-left:30px;padding-right:30px">取消</button>
                        <button type="button" class="btn btn-primary" style="padding-left:30px;padding-right:30px">确认发布</button>
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

<script type="text/javascript">
    var myDate = new Date();
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
</script>

</body>

</html>