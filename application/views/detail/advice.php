<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午15:14
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
<?php include_once ('commerHeader.php');?>

<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-sm-12" style="">
            <table class="table table-hover">
                <caption style="padding-left:20px;padding-top:20px;font-family: '华文中宋';font-size: medium;line-height: 2;">
                    <button type="button" class="btn btn-primary">发帖</button>
                    <button type="button" class="btn btn-primary">回复</button>
                </caption>
                <tbody>
                <tr>
                    <td>
                        查看:12
                    </td>
                    <td>
                        回复：1
                    </td>
                    <td colspan="7">
                        吃点大蒜能防感冒 8种辣味食物有益健康
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        小编
                    </td>
                    <td>
                        发布于 10 小时前
                    </td>
                    <td>
                        只看该作者
                    </td>
                    <td>
                        倒序浏览
                    </td>
                    <td colspan="4" style="float:right">
                        楼主
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2">
                        <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                             width="100px" >
                    </td>
                    <td colspan="7">

                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>
                        <p>1</p>
                        <p>主题</p>
                    </td>
                    <td>
                        <p>1</p>
                        <p>帖子</p>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>

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
