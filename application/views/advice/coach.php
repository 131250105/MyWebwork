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

        td {
            font-family: '微软雅黑';
        }

    </style>

</head>
<body  style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
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
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
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
                    <div style="padding-top:20px;text-align: center;vertical-align: middle;font-size: x-large;font-family:'华文中宋'">
                        版块公告
                    </div>
                    <div style="padding:30px;vertical-align: middle;font-family:'微软雅黑'">
                        你看见了最新的版块公告
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
                        <thead style="text-align:center">
                        <tr>
                            <th style="line-height: 3;">主题</th>
                            <th style="vertical-align:middle;text-align: center">作者</th>
                            <th style="vertical-align:middle;text-align: center">回复</th>
                            <th style="vertical-align:middle;text-align: center">最后发表时间</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($advice as $item){?>
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
                        <?php } ?>
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
