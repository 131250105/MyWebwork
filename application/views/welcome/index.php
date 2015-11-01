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
<body>
<?php include_once ('commerHeader.php');?>


<img src="<?php echo base_url('images/main.png');?>" class="img-responsive" alt="Cinque Terre" width="100%" height="50%">

<div class="container">
    <div class="row" >
        <div class="col-xs-4 col-sm-4">
        </div>
        <div class="col-xs-4 col-sm-4">
        </div>
        <div class="col-xs-4 col-sm-4">
        </div>
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
