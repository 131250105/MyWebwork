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
    <script src=" <?php echo base_url('js/activity.js');?>"></script>


    <link href="<?php echo base_url('css/sweetalert.css');?>" rel="stylesheet">

    <script src=" <?php echo base_url('js/sweetalert.min.js');?>"></script>
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

        .actionButton{
            border: 0px;
            background-image: -webkit-linear-gradient(top,#a6dea7,#272dfb);
        }
        .actionButton:hover{
            background-image: -webkit-linear-gradient(top,#a6dea7,#686cfd);
        }
        .actionButton:active{
            background-image: -webkit-linear-gradient(top,#a6dea7,#686cfd);
        }

        .actionButton2{
            border: 0px;
            background-image: -webkit-linear-gradient(top,#a6dea7,red);
        }
        .actionButton2:hover{
            background-image: -webkit-linear-gradient(top,#a6dea7,#fb6161);
        }
        .actionButton2:active{
            background-image: -webkit-linear-gradient(top,#a6dea7,#fb6161);
        }
    </style>

</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 400%;">
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
                        <li><a href="<?php echo site_url("activity/userindex?page=1")?>">活动一览</a></li>
                        <li><a href="<?php echo site_url("activity/joined?page=1")?>">我参与的活动</a></li>
                        <li><a href="<?php echo site_url("activity/published?page=1")?>">我发布的活动</a></li>
                        <li><a href="<?php echo site_url("activity/collected?page=1")?>">我收藏的活动</a></li>
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
        <table class="table">
            <tbody>
            <tr>
                <th style="vertical-align:middle;padding: 20px;font-size: x-large;" colspan="8">
                    <?php echo $mydata[0]->Activitytype?>
                </th>
            </tr>
            <tr>
                <td style="padding-left: 5%;vertical-align:middle" colspan="8">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="100px" style="float:left">

                    <span style="float:left;font-size: xx-large;padding: 25px;"><?php echo $mydata[0]->ActivityName?></span>

                    <div style="float:right;padding:37px">
                    <?php if($judgejoin ==0){ ?>
                    <button type="button" class="btn btn-primary actionButton" onclick="join('<?php echo site_url('activity/joinactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                            我要加入
                    </button>
                    <?php if($judgecollect ==0){ ?>
                            <button type="button" class="btn btn-primary actionButton" onclick="collect('<?php echo site_url('activity/collacteactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                                我要收藏
                            </button>
                        <?php }else{?>
                            <button type="button" class="btn btn-primary actionButton2" onclick="cancelcollect('<?php echo site_url('activity/cancelcollacteactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                                取消收藏
                            </button>
                        <?php }?>
                    <?php }else {?>
                        <button type="button" class="btn btn-primary actionButton2" onclick="canceljoin('<?php echo site_url('activity/canceljoinactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                            取消报名
                        </button>
                        <?php if($judgecollect ==0){ ?>
                            <button type="button" class="btn btn-primary actionButton" onclick="collect('<?php echo site_url('activity/collacteactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                                我要收藏
                            </button>
                        <?php }else{?>
                            <button type="button" class="btn btn-primary actionButton2" onclick="cancelcollect('<?php echo site_url('activity/cancelcollacteactivity')?>','<?php echo $mydata[0]->ActivityId?>')">
                                取消收藏
                            </button>
                        <?php }?>
                    <?php }?>
                    </div>
                 </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    基础信息
                </th>
            </tr>
            <tr>
                <td style="padding-left: 5%;vertical-align:middle;font-size: medium;" colspan="8">
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
                <td style="padding-left: 5%;vertical-align:middle;font-size: medium;" colspan="8">
                    <p><?php echo $mydata[0]->ActivityIntro?></p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    参与成员
                </th>
            </tr>
            <tr>
                <?php foreach($joindata as $item){?>
                <td style="padding-left: 5%;vertical-align:middle" width="1%">
                    <a style="cursor: pointer;" onclick="window.open('<?php echo site_url("user/otherUserView?userId=".$item->userId); ?>')"><img src="<?php echo $item->photo?>" class="img-rounded"
                         width="60px" ></a>
                </td>
                <td style="vertical-align:middle" width="10%">
                   <a style="cursor: pointer;" onclick="window.open('<?php echo site_url("user/otherUserView?userId=".$item->userId); ?>')"><p><?php echo $item->username?></p></a>
                    <p><?php echo $item->usertype?></p>
                </td>
                <?php } ?>


            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    评论
                </th>
            </tr>
            <tr>
                <td style="padding-left: 5%;border:0px" colspan="8">
                    <div class="form-group" style="padding-left: 15px;">
                        <label for="declaration" style="font-family: '微软雅黑 light';
                            font-size: small;font-weight: 600;">你的回应：</label>
                        <textarea class="form-control" rows="4" style="resize: none;" id="declaration"></textarea>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="vertical-align:middle;" colspan="8">
                    <button type="button" class="btn btn-primary" style="float:right">
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