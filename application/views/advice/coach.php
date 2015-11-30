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
                <div class="col-xs-12 col-sm-12" style="background-color:white;
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
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
                <div class="col-xs-12 col-sm-12" style="background-color:white;
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
                    <table class="table table-hover">
                        <thead style="text-align:center">
                        <tr>
                            <th>主题</th>
                            <th style="vertical-align:middle;text-align: center">作者</th>
                            <th style="vertical-align:middle;text-align: center">回复/查看</th>
                            <th style="vertical-align:middle;text-align: center">最后发表</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td style="vertical-align:middle">
                                <a style="font-size:medium">鼓楼多人越野活动</a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">小编</td>
                            <td style="vertical-align:middle;text-align: center">1/5</td>
                            <td style="vertical-align:middle;text-align: center">
                                <p>
                                    夕阳下的泪痕<br>
                                    昨天 21:54
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle">
                                <a style="font-size:medium">鼓楼篮球对抗赛</a>
                            </td>
                            <td style="vertical-align:middle;text-align: center">小编</td>
                            <td style="vertical-align:middle;text-align: center">6/8</td>
                            <td style="vertical-align:middle;text-align: center">
                                <p>
                                    夕阳下的泪痕<br>
                                    昨天 21:30
                                </p>
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