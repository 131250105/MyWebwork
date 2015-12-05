<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/2
 * Time: 16:15
 */
include_once("bean/userbean.php");
include_once('commerHeader_admin.php');
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
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 400%;">


<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-sm-12"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <div class="row">
            <div class="col-xs-12 col-sm-12"
                 style="">
                <p style="padding: 20px;font-family: '华文中宋';font-size: x-large;
                    line-height: 2;color: #777;text-align: left;">用户列表</p>
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"
                 style="">
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-responsive" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-6"
                     style="">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right" onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')">昵称</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">类型</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">注册时间</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">id</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12"
                             style="">
                            <a class="pull-right">封号</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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