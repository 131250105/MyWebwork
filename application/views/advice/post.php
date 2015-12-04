<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/4
 * Time: 11:23
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Simple Examples</title>
    <style>
        form {
            margin: 0;
        }
        textarea {
            display: block;
        }
    </style>
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('themes/default/default.css');?>" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script charset="utf-8" src=" <?php echo base_url('lang/zh_CN.js');?>"></script>
    <script charset="utf-8" src="<?php echo base_url('kindeditor-min.js');?>"></script>

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
<body>
<h3>默认模式</h3>
<form>
    <textarea name="content" style="width:700px;height:200px;visibility:hidden;">KindEditor</textarea>
</form>
</body>
</html>
