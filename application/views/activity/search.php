<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午19:02
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
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
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
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 200%;">


<div class="container">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="">
            <div class="row">
                <?php
                include_once('leftColumn.php');
                ?>
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
                        <li><a href="<?php echo site_url("activity/userindex")?>">活动一览</a></li>
                        <li class="active"><a href="<?php echo site_url("activity/search")?>">活动搜索</a></li>
                        <li><a href="<?php echo site_url("activity/joined")?>">我参与的活动</a></li>
                        <li><a href="<?php echo site_url("activity/published")?>">我发布的活动</a></li>
                        <li><a href="<?php echo site_url("activity/collected")?>">我收藏的活动</a></li>
                    </ul>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
        </div>
        <table class="table table-hover">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">活动搜索</caption>
            <thead style="text-align:center">
            <tr>
                <th colspan="5">
                    精确搜索
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="5">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="keyWord" class="col-sm-2 control-label" style="font-family: '幼圆';">关键字</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="keyWord"
                                       placeholder="请输入关键字">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;搜索
                                </button>
                            </div>
                        </div>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>

        <table class="table table-hover">
            <thead style="text-align:center">
            <tr>
                <th colspan="5">
                    按时间搜索
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="5">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="keyWord" class="col-sm-1 control-label" style="font-family: '幼圆';">从</label>
                            <div class="col-sm-4">
                                <input size="16" type="text" value="" readonly class="form_datetime" id="starttime"
                                       style="display: block;width: 100%;height: 34px;padding: 6px 12px;
                           font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
                           background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                            </div>
                            <label for="keyWord" class="col-sm-1 control-label" style="font-family: '幼圆';">到</label>
                            <div class="col-sm-4">
                                <input size="16" type="text" value="" readonly class="form_datetime" id="endtime"
                                       style="display: block;width: 100%;height: 34px;padding: 6px 12px;
                           font-size: 14px;line-height: 1.42857143;color: #555;background-color: #fff;
                           background-image: none;border: 1px solid #ccc;border-radius: 4px;">
                            </div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;搜索
                                </button>
                            </div>
                        </div>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>

        <div align="center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul><br>
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