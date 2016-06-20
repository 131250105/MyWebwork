<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/5
 * Time: 下午13:55
 */
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
    <script src=" <?php echo base_url('js/topic.js');?>"></script>
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
            </div>
            <div class="row">
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
        </div>
        <table id="tables" class="table table-hover">
            <tbody>
            <tr>
                <td style="vertical-align:middle;text-align:left">
                    发布人:<?php echo $thistopic[0]->username?>
                </td>
                <td style="vertical-align:middle;text-align:left">
                    发布时间:<?php echo $thistopic[0]->createdtime?>
                </td>
                <td style="vertical-align:middle;text-align: center">
                    <?php if($judgeauthor !=0){ ?>
                        <button type="button" class="btn btn-primary" onclick="deletetopic('<?php echo site_url('topic/deletetopic')?>','<?php echo $thistopic[0]->topicId?>')">
                            删除话题
                        </button>
                    <?php } ?>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="6">
                    话题内容:
                </th>
            </tr>
            <tr>
                <td style="vertical-align:middle;font-size: medium;" colspan="8">
                    <p>&nbsp;&nbsp;&nbsp;<?php echo $thistopic[0]->context?></p>
                </td>
            </tr>
            <tr>
                <th style="vertical-align:middle;padding: 20px;" colspan="8">
                    评论:
                </th>
            </tr>
            <?php foreach($comment as $item){?>
            <tr>
                <td>
                    发表人:<?php echo $item->commentusername?>
                </td>
                <td>
                    发表时间:<?php echo $item->createAt?>
                </td>
            </tr>
                <tr>
                    <td>
                        <?php echo $item->commentcontent?>
                    </td>
                </tr>

            <?php } ?>
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
                    <button type="button" class="btn btn-primary" onclick="comment('<?php echo site_url('topic/comment')?>','<?php echo $thistopic[0]->topicId?>','<?php echo $_SESSION["username"]?>')">
                        发表评论
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
