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
            vertical-align:middle;
            padding: 20px;
            font-family: '幼圆';
            font-size: large;
        }

        td {
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background-color:#f3f3f3">
<?php var_dump($mydata)?>

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
                        <li><a href="<?php echo site_url("activity/userindex")?>">活动一览</a></li>
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
            <tbody>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    <?php echo $mydata[0]->Activitytype?>
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="100px" >
                </td>
                <td style="vertical-align:middle" colspan="6">
                    <?php echo $mydata[0]->ActivityName?>
                </td>
                <td style="vertical-align:middle;text-align: center">
                    <button type="button" class="btn btn-primary">
                        我要加入
                    </button>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    基础信息
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle;font-size: medium;" colspan="8">
                    <p>地点：<?php echo $mydata[0]->Activitylocation?></p>
                    <p>时间：<?php echo $mydata[0]->Activitystarttime?> 至 <?php echo $mydata[0]->ActivityEndtime?></p>
                    <p>备注：<?php echo $mydata[0]->Activitybeizhu?></p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    详细介绍
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle;font-size: medium;" colspan="8">
                    <p><?php echo $mydata[0]->ActivityIntro?></p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    参与成员
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle" width="12.5%">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="60px" >
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <p>围观群众</p>
                    <p>其他信息</p>
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="60px" >
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <p>围观群众</p>
                    <p>其他信息</p>
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="60px" >
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <p>围观群众</p>
                    <p>其他信息</p>
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="60px" >
                </td>
                <td style="vertical-align:middle" width="12.5%">
                    <p>围观群众</p>
                    <p>其他信息</p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    评论
                </th>
            </tr>
            <tr>
                <td style="border:0px" colspan="8">
                    <div class="form-group" style="padding-left: 15px;">
                        <label for="declaration" style="font-family: '微软雅黑 light';
                            font-size: small;font-weight: 600;">你的回应：</label>
                        <textarea class="form-control" rows="4" style="resize: none;" id="declaration"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:middle;padding-left: 25px;" colspan="8">
                    <button type="button" class="btn btn-primary">
                        加上去
                    </button>
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

</body>

</html>