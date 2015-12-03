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

<?php var_dump($leftfriends)?>
<?php var_dump($rightfriends)?>
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
                        <li class="active"><a href="<?php echo site_url("user/friends")?>">好友列表</a></li>
                        <li><a href="<?php echo site_url("user/search")?>">新鲜事</a></li>
                        <li><a href="<?php echo site_url("user/joined")?>">好友参与的活动</a></li>
                        <li><a href="<?php echo site_url("user/published")?>">好友发布的活动</a></li>
                        <li><a href="<?php echo site_url("user/collected")?>">好友收藏的活动</a></li>
                    </ul>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="padding: 20px;font-family: '华文中宋';font-size: x-large;
                    line-height: 2;color: #777;text-align: left;">好友列表</p>
                </div>
            </div>
            <div class="row" style="padding: 20px;">
            <?php foreach($leftfriends as $item){  ?>
                <div class="col-xs-3 col-sm-3"
                     style="">
                    <div class="col-xs-6 col-sm-6"
                         style="">
                        <img src="<?php echo $item->photo?>" class="img-responsive" width="100%" align="center">
                    </div>
                    <div class="col-xs-6 col-sm-6"
                         style="">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12"
                                 style="">
                                <span class="pull-left" data-toggle="tooltip" title="<?php echo $item->username?>"
                                      style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"
                                      onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')"><?php echo $item->username?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12"
                                 style="visibility: hidden">
                                <a class="pull-left">占位</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12"
                                 style="">
                                <a class="pull-left" href="javascript::void(0)">删除</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            foreach($rightfriends as $item){  ?>
                    <div class="col-xs-3 col-sm-3"
                         style="">
                        <div class="col-xs-6 col-sm-6"
                             style="">
                            <img src="<?php echo $item->photo?>" class="img-responsive" width="100%" align="center">
                        </div>
                        <div class="col-xs-6 col-sm-6"
                             style="">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12"
                                     style="">
                                    <span class="pull-left" data-toggle="tooltip" title="<?php echo $item->username?>"
                                          style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;"
                                          onclick="window.open('<?php echo site_url("user/otherUserView"); ?>')"><?php echo $item->username?></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12"
                                     style="visibility: hidden">
                                    <a class="pull-left">占位</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12"
                                     style="">
                                    <a class="pull-left" href="javascript::void(0)">删除</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
            }
            ?>
            </div>
            <div class="row">
                <br/><br/>
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <button type="button" class="btn btn-primary btn-block">加载更多</button>
                </div>
                <br/><br/><br/>
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