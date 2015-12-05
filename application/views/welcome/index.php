<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/18
 * Time: 下午13:56
 */
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>Test</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- [endif]-->

    <link rel='stylesheet prefetch' href='http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css'>
</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 400%;">
<?php include_once ('commerHeader.php');?>
<img src="<?php echo base_url('images/main_2.png');?>" class="img-responsive" width="100%" style="">

<div class="container">
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-12"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
        <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <div class="row" >
                <div class="col-xs-12 col-sm-12">
                    <p style="visibility: hidden">位置调整</p>
                    <p style="text-align:center;vertical-align: middle;
                font-family: '微软雅黑 light';font-weight: 600;font-size: large;
                line-height: 3;color: #434343;">活动推荐</p>
                    <hr/>
                </div>
            </div>
            <div class="row" >
            <?php foreach($activity as $item){?>
                <div class="col-xs-3 col-sm-3">
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12" style="line-height:3">
                            <img src="<?php echo base_url('images/activity.jpg');?>" class="img-responsive" width="100%" align="center">
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12" style="line-height:3">
                            <span style="text-align:left;vertical-align: middle;font-size: medium;font-family: '华文中宋';"><?php echo $item->ActivityName?></span>
                            <span class="pull-right" style="vertical-align: middle;font-size: medium;font-family: '华文中宋';">类型：<?php echo $item->Activitytype?></span>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12" style="line-height:3;vertical-align: bottom;font-size: small;font-family: '微软雅黑';">
                            <span>地点：<?php echo $item->Activitylocation?></span>
                            <span class="pull-right">开始时间：<?php echo $item->Activitystarttime?></span>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>

    <div class="row" >
        <div class="col-xs-12 col-sm-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
                <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
                    </div>
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12">
                            <p style="visibility: hidden">位置调整</p>
                            <p style="text-align:center;vertical-align: middle;
                font-family: '微软雅黑 light';font-weight: 600;font-size: large;
                line-height: 3;color: #434343;">热门话题</p>
                            <hr/>
                        </div>
                    </div>
                    <div class="row" >
                        <?php foreach($topic as $item){?>
                            <div class="col-xs-12 col-sm-12">
                                <div class="row" >
                                    <div class="col-xs-2 col-sm-2">
                                        <img src="<?php echo base_url('images/topic.jpg');?>" class="img-responsive" width="100%" align="center">
                                    </div>
                                    <div class="col-xs-10 col-sm-10" style="line-height:3">
                                        <span style="text-align:left;vertical-align: middle;font-size: medium;font-family: '华文中宋';"><?php echo $item->context?></span>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-xs-12 col-sm-12" style="line-height:3;vertical-align: bottom;font-size: small;font-family: '微软雅黑';">
                                        <?php echo $item->createdtime?>&nbsp;&nbsp;<span>posted by <a><?php echo $item->username?></a></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <p style="visibility: hidden">位置调整</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
                <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
                    </div>
                    <div class="row" >
                        <div class="col-xs-12 col-sm-12">
                            <p style="visibility: hidden">位置调整</p>
                            <p style="text-align:center;vertical-align: middle;
                font-family: '微软雅黑 light';font-weight: 600;font-size: large;
                line-height: 3;color: #434343;">建议推荐</p>
                            <hr/>
                        </div>
                    </div>
                    <div class="row" >
                        <?php foreach($advice as $item){?>
                            <div class="col-xs-12 col-sm-12">
                                <div class="row" >
                                    <div class="col-xs-12 col-sm-12" style="vertical-align: middle;font-size: large;font-family: '黑体';line-height:3">
                                        <span style="text-align:left;vertical-align: middle;font-size: medium;font-family: '华文中宋';"><?php echo $item->advicetitle?></span>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-xs-12 col-sm-12" style="line-height:3;vertical-align: bottom;font-size: small;font-family: '微软雅黑';">
                                        <span><?php echo $item->createdAt?></span>
                                        <span>posted by <a><?php echo $item->publishername?></a></span>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-xs-2 col-sm-2" style="line-height:3;vertical-align: bottom;font-size: small;font-family: '微软雅黑';">
                                        <img src="<?php echo base_url('images/advice.jpg');?>" class="img-responsive" width="100%" align="center">
                                    </div>
                                    <div class="col-xs-10 col-sm-10" style="line-height:3;vertical-align: bottom;font-size: small;font-family: '微软雅黑';">
                                        <span><?php echo $item->advicecontent?></span>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <p style="visibility: hidden">位置调整</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
</div>

<div style="text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>

<script type="text/javascript">
    $(window).load(function() {
        document.getElementById('commonHeaderContainer').style.marginBottom="0px";
        document.getElementById('commonHeaderContainer').className="navbar navbar-inverse navbar-fixed-top";
        document.getElementById('dropDownMenu').style.position="fixed";
    });
</script>


</body>
</html>
