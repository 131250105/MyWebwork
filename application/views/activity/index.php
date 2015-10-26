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
            font-size: 18px;
        }

        td {
            font-size: 25px;
            font-family: '幼圆';
            font-weight: 900;
        }

    </style>

</head>
<body>


<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-sm-12"style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;visibility: hidden">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <p style="visibility: hidden">位置调整</p>
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">活动一览</a></li>
                <li><a href="#">活动搜索</a></li>
                <li><a href="#">我参与的活动</a></li>
                <li><a href="#">我发布的活动</a></li>
                <li><a href="#">我收藏的活动</a></li>
            </ul>
            <p style="visibility: hidden">位置调整</p>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <table class="table table-striped">
                <caption>活动一览</caption>
                <thead style="text-align:center">
                <tr>
                    <th>标题/图片</th>
                    <th>参与人数</th>
                    <th>活动类型</th>
                    <th>距开始还有</th>
                    <th>备注</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-responsive"
                             width="140px" >
                        <a id="test">BILIBILI</a>
                    </td>
                    <td style="vertical-align:middle">0/40</td>
                    <td style="vertical-align:middle">搞基</td>
                    <td style="vertical-align:middle">约2个月</td>
                    <td style="vertical-align:middle">Yooo~</td>
                </tr>
                <tr>
                    <td style="vertical-align:middle">
                        <img src="<?php echo base_url('images/main.png');?>" class="img-responsive"
                             width="140px" >
                        BILIBILI
                    </td>
                    <td style="vertical-align:middle">0/40</td>
                    <td style="vertical-align:middle">搞基</td>
                    <td style="vertical-align:middle">约2个月</td>
                    <td style="vertical-align:middle">Yooo~</td>
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

</body>

</html>