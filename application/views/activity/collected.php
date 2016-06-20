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

        .pagination>li>a{
            background-color: rgba(255, 255, 255, 0.33);
            border: 1px solid rgba(101, 174, 122, 0.49);
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
                        <li><a href="<?php echo site_url("activity/userindex?page=1")?>">活动一览</a></li>
                        <li><a href="<?php echo site_url("activity/joined?page=1")?>">我参与的活动</a></li>
                        <li><a href="<?php echo site_url("activity/published?page=1")?>">我发布的活动</a></li>
                        <li class="active"><a href="<?php echo site_url("activity/collected?page=1")?>">我收藏的活动</a></li>
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
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">我收藏的活动</caption>
            <thead style="text-align:center">
            <tr>
                <th>标题</th>
                <th style="vertical-align:middle;text-align: center">活动类型</th>
                <th style="vertical-align:middle;text-align: center">地点</th>
                <th style="vertical-align:middle;text-align: center">开始时间</th>
                <th style="vertical-align:middle;text-align: center">结束时间</th>
            </tr>
            </thead>
            <tbody>

            <?php $count=0;
            foreach($mydata as $item){
                $count++;
                if($count<=5*$page&&$count>5*$page-5){?>
                <tr>
                    <td style="vertical-align:middle">
                        <?php echo $item->ActivityId ?>
                        <a  href="<?php echo site_url("detail/activity?activityId=".$item->ActivityId)?>"><?php echo $item->ActivityName?></a>
                    </td>
                    <td style="vertical-align:middle;text-align: center"><?php echo $item->Activitytype?></td>
                    <td style="vertical-align:middle;text-align: center"><?php echo $item->Activitylocation?></td>
                    <td style="vertical-align:middle;text-align: center"><?php echo $item->Activitystarttime?></td>
                    <td style="vertical-align:middle;text-align: center"><?php echo $item->ActivityEndtime?></td>
                </tr>
            <?php }} ?>
            </tbody>
        </table>
        <?php if($count>0){?>
            <div align="center">
                <ul class="pagination">
                    <li><a href="#" onclick="pageJump(4,1)">&laquo;</a></li>
                    <?php $pageView=0;
                    while($count>0){
                        $pageView++;?>
                        <li><a href="#" onclick="pageJump(4,<?php echo $pageView?>)"><?php echo $pageView?></a></li>
                        <?php
                        $count=$count-5;
                    } ?>
                    <li><a href="#" onclick="pageJump(4,<?php echo $pageView?>)">&raquo;</a></li>
                </ul><br>
            </div>
        <?php }else{?>
            <p style="line-height: 4;font-size: x-large;
            text-align: center;font-family: '幼圆';">暂无数据</p>
        <?php } ?>
    </div>
</div>
<div class="row">
    <p style="visibility: hidden">位置调整</p>
</div>
</div>

<div style="position: absolute;bottom: 0px;width: 100%;text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>


</body>

</html>