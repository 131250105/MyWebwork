<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/5
 * Time: 上午11:08
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
    <script src=" <?php echo base_url('js/group.js');?>"></script>

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
                </div>
            </div>
            <div class="row">

            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <table class="table table-hover">
            <tbody>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    <?php echo $thiscircle[0]->grouptype?>
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle">
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                         width="100px" >
                </td>
                <td style="vertical-align:middle" colspan="6">
                    <?php echo $thiscircle[0]->groupname?>
                </td>
                <td style="vertical-align:middle;text-align: center">
                    <?php if($judgejoin ==0){ ?>
                        <button type="button" class="btn btn-primary" onclick="joincircle('<?php echo site_url("user/joingroup")?>' , '<?php echo $thiscircle[0]->groupId?>')">
                            我要加入
                        </button>
                    <?php }else {?>
                        <button type="button" class="btn btn-primary" onclick="quitcircle('<?php echo site_url("user/quitgroup")?>' , '<?php echo $thiscircle[0]->groupId?>')">
                            退出群组
                        </button>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                   简介
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle;font-size: medium;" colspan="8">
                    <p><?php echo $thiscircle[0]->groupintro?></p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    兴趣组成员
                </th>
            </tr>
            <tr>
                <?php foreach($circlemem as $item){?>
                    <td style="vertical-align:middle" width="12.5%">
                        <img src="<?php echo $item->photo?>" class="img-rounded"
                             width="60px" >
                    </td>
                    <td style="vertical-align:middle" width="12.5%">
                        <p><?php echo $item->username?></p>
                        <p><?php echo $item->usertype?></p>
                    </td>
                <?php } ?>


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