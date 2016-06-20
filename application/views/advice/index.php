<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午19:02
 */
include_once("bean/userbean.php");
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/header.css');?>" media="screen" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src=" <?php echo base_url('js/md5.js');?>"></script>
    <script src="<?php echo base_url('js/header.js');?>"></script>
    <script src="<?php echo base_url('js/advice.js');?>"></script>
    <style type="text/css">
        @font-face {
            font-family: 'Glyphicons Halflings';

            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot');?>');
            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot?#iefix');?>') format('embedded-opentype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.woff');?>') format('woff'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.ttf');?>') format('truetype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular');?>') format('svg');
        }

        td {
            font-family: '微软雅黑';
        }

        /**
        *td a {
        *color:black;
        *}
        */

    </style>

</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 200%;">
<?php include_once ('commerHeader.php');?>
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
                    <a href ="<?php echo site_url("advice/post");?>" style="text-decoration: none;">
                        <button type="button" class="btn btn-primary btn-block">
                        发帖
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9" style="">
            <div class="row">
                <div class="col-xs-12 col-sm-12" style="
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
                    <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
                    </div>
                    <div style="">
                        <div style="padding-top:20px;text-align: center;vertical-align: middle;font-size: x-large;font-family:'华文中宋'">
                            版块公告
                        </div>
                        <div style="padding:30px;vertical-align: middle;font-family:'微软雅黑'">
                            你看见了最新的版块公告
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12" style="
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
                    <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
                    </div>
                    <table class="table table-hover">
                        <caption style="padding-left:20px;padding-top:20px;font-family: '华文中宋';font-size: medium;line-height: 2;">子版块</caption>
                        <tbody>
                        <tr>
                            <td style="vertical-align:middle">
                                <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                                     width="60px" >
                                <a href="<?php echo site_url("advice/forHelp?page=1")?>" style="padding-left:15px">求助版块</a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">
                                <span data-toggle="tooltip" title="<?php echo $lasthelpadvice[0]->advicetitle?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lasthelpadvice[0]->advicetitle?>
                                </span>
                                <span data-toggle="tooltip" title="<?php echo $lasthelpadvice[0]->publishername?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lasthelpadvice[0]->publishername?>
                                </span>
                            </td>
                            <td style="vertical-align:middle;text-align: left;display:block;width:20%">
                                <p data-toggle="tooltip" title="<?php echo $lasthelpadvice[0]->createdAt?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lasthelpadvice[0]->createdAt?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle">
                                <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                                     width="60px" >
                                <a href="<?php echo site_url("advice/doctor?page=1")?>" style="padding-left:15px">医生来了</a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">
                                <span data-toggle="tooltip" title="<?php echo $lastdoctoradvice[0]->advicetitle?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastdoctoradvice[0]->advicetitle?>
                                </span>
                                <span data-toggle="tooltip" title="<?php echo $lastdoctoradvice[0]->publishername?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastdoctoradvice[0]->publishername?>
                                </span>
                            </td>
                            <td style="vertical-align:middle;text-align: left">
                                <p data-toggle="tooltip" title="<?php echo $lastdoctoradvice[0]->createdAt?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastdoctoradvice[0]->createdAt?>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;width:70%">
                                <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                                     width="60px" >
                                <a href="<?php echo site_url("advice/coach?page=1")?>" style="padding-left:15px">教练，我想...</a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">
                                <span data-toggle="tooltip" title="<?php echo $lastcoachadvice[0]->advicetitle?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastcoachadvice[0]->advicetitle?>
                                </span>
                                <span data-toggle="tooltip" title="<?php echo $lastcoachadvice[0]->publishername?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastcoachadvice[0]->publishername?>
                                </span>
                            </td>
                            <td style="vertical-align:middle;text-align: left">
                                <p data-toggle="tooltip" title="<?php echo $lastdoctoradvice[0]->createdAt?>"
                                   style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                                    <?php echo $lastdoctoradvice[0]->createdAt?>
                                </p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12" style="
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
                    <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
                    </div>
                    <table class="table">
                        <caption style="padding-left:20px;padding-top:20px;font-family: '华文中宋';font-size: medium;line-height: 2;">推荐建议</caption>
                        <thead style="text-align:center">
                        <tr>
                            <th>主题</th>
                            <th style="vertical-align:middle;text-align: center">作者</th>
                            <th style="vertical-align:middle;text-align: center">回复</th>
                            <th style="vertical-align:middle;text-align: center">最后发表时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $count=0;
                        foreach($hotadvice as $item){
                            $count++;
                            if($count<=5*$page&&$count>5*$page-5){?>
                        <tr>
                            <td style="vertical-align:middle">
                                <a style="font-size:medium" href="<?php echo site_url("detail/advice?adviceId=".$item->adviceId)?>"><?php echo $item->advicetitle?></a>
                            </td>
                            <td style="vertical-align:middle;text-align: center"><?php echo $item->publishername?></td>
                            <td style="vertical-align:middle;text-align: center"><?php echo $item->replynum?></td>
                            <td style="vertical-align:middle;text-align: center">
                                <p>
                                    <?php if($item->lasttime==0)echo '暂无';
                                    else echo $item->lasttime?>
                                </p>
                            </td>
                        </tr>
                        <?php }} ?>
                        </tbody>
                    </table>
                    <?php if($count>0){?>
                        <div align="center">
                            <ul class="pagination">
                                <li><a href="#" onclick="pageJump(1,1)">&laquo;</a></li>
                                <?php $pageView=0;
                                while($count>0){
                                    $pageView++;?>
                                    <li><a href="#" onclick="pageJump(1,<?php echo $pageView?>)"><?php echo $pageView?></a></li>
                                    <?php
                                    $count=$count-5;
                                } ?>
                                <li><a href="#" onclick="pageJump(1,<?php echo $pageView?>)">&raquo;</a></li>
                            </ul><br>
                        </div>
                    <?php }else{?>
                        <p style="line-height: 4;font-size: x-large;
            text-align: center;font-family: '幼圆';">暂无数据</p>
                    <?php } ?>
                </div>
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
<script>
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

</body>

</html>
