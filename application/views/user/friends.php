<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/1
 * Time: 18:28
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
            font-size: 18px;
        }

        td {
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background-color:#f3f3f3">


<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-3">
            <div class="row" >
                <div class="col-xs-6 col-sm-4.8"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo $user->getPhoto();?>"
                         class="img-responsive"  alt="Cinque Terre">
                    <p style="visibility: hidden">位置调整</p>
                </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <p style="font-family: '微软雅黑';">昵称：<?php echo $user->getusername();?></p>
                    <p style="font-family: '微软雅黑';">性别：<?php echo $user->getSex();?></p>
                    <p style="font-family: '微软雅黑';">年龄：</p>
                    <p style="font-family: '微软雅黑';">所在地：<?php echo $user->getProvince().$user->getCity();?></p>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <a href ="<?php echo site_url("user/edit");?>" style="text-decoration: none;"><button type="button" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编辑资料
                        </button></a>
                </div>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <table class="table">
                        <caption style="line-height: 2;">活动推荐</caption>
                        <tbody>
                        <tr>
                            <td style="text-align: center;padding:30px;background-color:#f3f3f3">
                                <img src="<?php echo base_url('images/main.png');?>" class="img-responsive" width="100%" align="center">
                                <label style="padding-top:10px;font-size: 15px;">鼓楼多人越野活动</label>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <table class="table table-hover">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">活动一览</caption>
            <thead style="text-align:center">
            <tr>
                <th>标题/图片</th>
                <th style="vertical-align:middle;text-align: center">参与人数</th>
                <th style="vertical-align:middle;text-align: center">活动类型</th>
                <th style="vertical-align:middle;text-align: center">距开始还有</th>
                <th style="vertical-align:middle;text-align: center">备注</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                         width="100px" >
                    <a id="test" href="javascript:;void(0)">鼓楼多人越野活动</a>
                </td>
                <td style="vertical-align:middle;text-align: center">0/40</td>
                <td style="vertical-align:middle;text-align: center">跑步</td>
                <td style="vertical-align:middle;text-align: center">约2个月</td>
                <td style="vertical-align:middle;text-align: center">无</td>
            </tr>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/main.png');?>" class="img-rounded"
                         width="100px" >
                    <a  href="<?php echo site_url("detail/activity")?>">鼓楼篮球对抗赛</a>
                </td>
                <td style="vertical-align:middle;text-align: center">0/12</td>
                <td style="vertical-align:middle;text-align: center">篮球</td>
                <td style="vertical-align:middle;text-align: center">约1个月</td>
                <td style="vertical-align:middle;text-align: center">无</td>
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

</body>

</html>