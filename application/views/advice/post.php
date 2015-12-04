<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/4
 * Time: 11:23
 */
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <title>Simple Examples</title>
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('css/kindeditor-min.js');?> "></script>
    <style>
        form {
            margin: 0;
        }
        textarea {
            display: block;
        }
    </style>

    <script>
        var editor;
        KindEditor.ready(function(K) {
            editor = K.create('textarea[name="content"]', {
                resizeType : 1,
                allowPreviewEmoticons : false,
                allowImageUpload : false,
                items : [
                    'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
                    'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
                    'insertunorderedlist', '|', 'emoticons', 'image', 'link']
            });
        });
    </script>
</head>
<body style="background-color:#f3f3f3">
<?php include_once ('commerHeader.php');?>

<div class="container">
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-12" style="background-color:white;
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
            <form>
                <div class="row">
                    <div class="col-xs-10 col-md-offset-1" style="display:block">
                        <textarea name="content" style="width:100%;height:300px;visibility:hidden;">输入你要发的内容</textarea>
                        <p style="visibility: hidden">位置调整</p>
                        <button type="submit" class="btn btn-primary pull-right" style="">
                            &nbsp;&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
</div>

<div style="bottom:0px;position:absolute;width:100%;text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>

</body>
</html>
