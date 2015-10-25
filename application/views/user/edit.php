<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/10/23
 * Time: 22:46
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
    <link href="<?php echo base_url('css/avatar_upload.css');?>" rel="stylesheet" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>

    <script type="text/javascript" src=" <?php echo base_url('js/cropbox.js');?>"></script>
    <script type="text/javascript" src=" <?php echo base_url('js/mouseHover.js');?>"></script>
    <style type="text/css">
        @font-face {
            font-family: 'Glyphicons Halflings';

            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot');?>');
            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot?#iefix');?>') format('embedded-opentype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.woff');?>') format('woff'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.ttf');?>') format('truetype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular');?>') format('svg');
        }
    </style>

</head>
<body>


<div class="container">
    <div class="row" >
        <div class="col-xs-6 col-sm-3"style="background-color: #dedef8;
         box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;visibility: hidden">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
    </div>
    <div class="row" >
        <div class="col-xs-6 col-sm-3"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <div class="row" >
                <div class="col-xs-6 col-sm-4.8"
                     style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo $user->getPhoto();?>"
                         class="img-responsive"  alt="Cinque Terre">
                    <p style="visibility: hidden">位置调整</p>
                </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
                    <p style="visibility: hidden">位置调整</p>
                    <p>昵称：<?php echo $user->getusername();?></p>
                    <p>性别：<?php echo $user->getSex();?></p>
                    <p>学校：</p>
                    <p>地址：<?php echo $user->getAddress();?></p>
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-user"></span></span>编辑资料
                    </button>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                </div>
            </div>
            <div class="row" >
                <p style="visibility: hidden">位置调整</p>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">SVN</a></li>
                    <li><a href="#">iOS</a></li>
                    <li><a href="#">VB.Net</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">PHP</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-6 col-sm-9"
             style="box-shadow: inset 1px -1px 1px #444, inset -1px 1px 1px #444;">
            <p style="visibility: hidden">位置调整</p>
            <table class="table table-striped">
                <caption>编辑资料</caption>
                <tbody>
                <tr>
                    <td width="15%">头像</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <ul class="da-thumbs" id="da-thumbs" style="float: left;">
                                <li>
                                    <a href="javascript:void(0)"> <img
                                            src="<?php echo $user->getPhoto();?>" class="img-responsive"
                                            alt="Cinque Terre" width="110" />
                                        <div style="display: block;">
										<span data-toggle="modal" data-target="#submitNewAcatarDiv" data-backdrop="static"
                                              style="font-size: 20px;margin-top: 40px;text-align: center;">更换头像</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        <div>
                    </td>
                </tr>
                <tr>
                    <td>昵称</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称" value="<?php echo $user->getusername();?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>性别</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <select class="form-control" id =usersex>
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>QQ</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>手机号</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>地址</td>
                    <td>
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(function() {
        $('#da-thumbs>li').hoverdir();
        $("[data-toggle='tooltip']").tooltip();
    });
</script>

<div class="modal fade" id="submitNewAcatarDiv" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 800px">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">上传新的头像</h4>
            </div>

            <div class="form-group" style="padding:50px 80px;height: 480px;">
                <div class="imageBox" style="float: left;">
                    <div class="thumbBox"></div>
                    <div class="spinner" style="display: none">Loading...</div>
                </div>

                <div class="cropped" style="float: left;margin-left: 20px" id="head1">
                    <img src="<?php echo $user->getPhoto();?>" width="125" height="140" id="head1"  style="margin-left:110px;margin-top:30px"/>
                </div>
                <br/>
                <div class="cropped2" style="float: left;margin-left: 20px;margin-top: 15px" id="head2">
                    <img src="<?php echo $user->getPhoto();?>" width="98" height="110" id="head1"  style="margin-left:110px;margin-top:30px"/>
                </div>
                <br/>
                <div class="cropped3" style="float: left;margin-left: 20px;margin-top: 15px" id="head3">
                    <img src="<?php echo $user->getPhoto();?>" width="62" height="70" id="head1"  style="margin-left:110px;margin-top:30px"/>
                </div>
                <br/>
                <div class="action">
                    <a href="javascript:;" class="pic_cut">
                        <input type="file" id="file" style="float:left; width: 180px">
                        更换图片
                    </a>
                    <input type="button" id="btnCrop" value="Crop"
                           style="float: right"  class="btn btn-primary" >
                    <input type="button" id="btnZoomIn"  class="btn btn-primary"
                           value="+" style="float: right">
                    <input type="button" id="btnZoomOut"  class="btn btn-primary"
                           value="-" style="float: right"  >
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
                <button type="button" class="btn btn-primary">确认修改</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>


<script type="text/javascript">
    $(window).load(function() {
        var options = {
            thumbBox : '.thumbBox',
            spinner : '.spinner',
            imgSrc : '<?php echo $user->getPhoto()?>'
        }
        var cropper = $('.imageBox').cropbox(options);
        $('#file').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(e) {
                options.imgSrc = e.target.result;
                cropper = $('.imageBox').cropbox(options);
            }
            reader.readAsDataURL(this.files[0]);
            this.files = [];
        })
        $('#btnCrop').on('click', function() {
            var img = cropper.getDataURL();
            $('#head1').empty();
            $('#head2').empty();
            $('#head3').empty();
            $('#head1').append('<img src="'+img+'" width="125" height="140" id="head1"  style="margin-left:110;margin-top:30"/>');
            $('#head2').append('<img src="'+img+'" width="98" height="110" id="head1"  style="margin-left:110;margin-top:30"/>');
            $('#head3').append('<img src="'+img+'" width="62" height="70" id="head1"  style="margin-left:110;margin-top:30"/>');
        })
        $('#btnZoomIn').on('click', function() {
            cropper.zoomIn();
        })
        $('#btnZoomOut').on('click', function() {
            cropper.zoomOut();
        })
    });
</script>


</body>

</html>