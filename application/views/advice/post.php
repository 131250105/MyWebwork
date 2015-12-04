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
    <script src=" <?php echo base_url('js/advice.js');?> "></script>
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
                    'insertunorderedlist', '|', 'emoticons', 'image', 'link'],
                afterBlur: function(){this.sync();}
            });
        });

    </script>
</head>
<body style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 200%;">
<?php include_once ('commerHeader.php');?>

<div class="container">
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
    <div class="row" >
        <div class="col-xs-12 col-sm-12" style="
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
            <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
            </div>
            <form class="form-horizontal" role="form">
                <div class="row">
                    <div class="col-xs-10 col-md-offset-1" style="display:block">
                        <div class="form-group">
                            <label for="postPlace" class="col-sm-1 control-label" style="text-align: left;">版块：</label>
                            <div class="col-sm-5">
                                <select class="form-control" id="postPlace">
                                    <option>求助板块</option>
                                    <option>医生板块</option>
                                    <option>教练板块</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adviceTitle" class="col-sm-1 control-label" style="text-align: left;">标题：</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="adviceTitle"
                                       placeholder="请输入标题">
                            </div>
                        </div>
                        <textarea name="content" id ="content" style="width:100%;height:300px;visibility:hidden;">输入你要发的内容</textarea>
                        <p style="visibility: hidden">位置调整</p>
                        <button type="button" class="btn btn-primary pull-right" style="" onclick="post('<?php echo site_url("advice/postadvice")?>')">
                            &nbsp;&nbsp;&nbsp;&nbsp;提交&nbsp;&nbsp;&nbsp;&nbsp;</button>
                    </div>
                </div>
            </form>
            <div class="row">
                <p style="visibility: hidden">位置调整</p>
                <p style="visibility: hidden">位置调整</p>
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
