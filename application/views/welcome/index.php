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

</div>

<script type="text/javascript">
    $(window).load(function() {
        $('#commonHeaderContainer').marginBottom="0px";

    });
</script>


</body>
</html>
