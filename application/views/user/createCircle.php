<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/4
 * Time: 15:21
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
            font-size: 18px;
        }

        td {
            font-size: 17px;
            font-family: '微软雅黑';
        }

    </style>

</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 200%;">

<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-3">
            <div class="row" >
                <?php
                include_once('leftColumn.php');
                ?>
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <a href ="<?php echo site_url("user/edit");?>" style="text-decoration: none;"><button type="button" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编辑资料
                        </button></a>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="<?php echo site_url("user/createCircle")?>">创建圈子</a></li>
                        <li><a href="<?php echo site_url("user/interestCircle")?>">我加入的圈子</a></li>
                        <li><a href="<?php echo site_url("user/publishedCircle")?>">我创建的圈子</a></li>
                    </ul>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="padding: 20px;font-family: '华文中宋';font-size: x-large;
                    line-height: 2;color: #777;text-align: left;">创建圈子</p>
                </div>
            </div>
            <form>
                <div class="row" style="padding: 20px;">
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 col-md-offset-1"
                             style="font-family: '幼圆';line-height: 2;">名称</div>
                        <div class="col-xs-9 col-sm-9"
                             style="">
                            <textarea class="form-control" rows="1" style="resize: none;" id="nickname"></textarea>
                        </div>
                    </div>
                    <div class="row"><p style="visibility: hidden">位置调整</p></div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 col-md-offset-1"
                             style="font-family: '幼圆';line-height: 2;">类型</div>
                        <div class="col-xs-9 col-sm-9"
                             style="">
                            <textarea class="form-control" rows="1" style="resize: none;" id="hobby"></textarea>
                        </div>
                    </div>
                    <div class="row"><p style="visibility: hidden">位置调整</p></div>
                    <div class="row">
                        <div class="col-xs-1 col-sm-1 col-md-offset-1"
                             style="font-family: '幼圆';line-height: 2;">描述</div>
                        <div class="col-xs-9 col-sm-9"
                             style="">
                            <textarea class="form-control" rows="4" style="resize: none;" id="declaration"></textarea>
                        </div>
                    </div>
                    <div class="row"><p style="visibility: hidden">位置调整</p></div>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11"
                             style="">
                            <button type="button" class="btn btn-primary pull-right" id="save" onclick="creategroup('<?php echo site_url("user/creategroup")?>')"  style="padding-left:30px;padding-right:30px">确定</button>
                            <span style="visibility: hidden" class="pull-right">位调</span>
                            <button type="reset" class="btn btn-default pull-right" id="reset" style="padding-left:30px;padding-right:30px">重置</button>
                        </div>
                    </div>
                    <div class="row"><p style="visibility: hidden">位置调整</p></div>
                </div>
            </form>
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