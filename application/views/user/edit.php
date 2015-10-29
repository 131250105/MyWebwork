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
<body style="background-color:#f3f3f3">


<div class="container" style="background-color:white">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="background-color:#f3f3f3;padding-right: 50px;">
            <div class="row" >
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="line-height: 2;font-size: xx-large;font-family:'华文中宋';">个人设置</p>
                </div>
            </div>
            <div class="row" >
                <p style="visibility: hidden">位置调整</p>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active" style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;基本信息</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-headphones"></span>&nbsp;&nbsp;&nbsp;我的配件</a></li>
                    <li style="line-height: 2;padding-left: 10px;">
                        <a href="#"><span class="glyphicon glyphicon-cog"></span>&nbsp;&nbsp;&nbsp;账户安全</a></li>
                </ul>
                <p style="visibility: hidden">位置调整</p>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;">
            <p style="visibility: hidden">位置调整</p>
            <ul class="nav nav-tabs" style="padding-left: 20px;">
                <li class="active" id="data"><a href="javascript:void (0);">&nbsp;&nbsp;个人资料&nbsp;&nbsp;</a></li>
                <li id="avatar"><a href="javascript:void (0);">&nbsp;&nbsp;头像设置&nbsp;&nbsp;</a></li>
            </ul>
            <table class="table table-striped" id="dataTab">
                <tbody>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">昵称</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称" value="<?php echo $user->getusername();?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">性别</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <select class="form-control" id =usersex>
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">生日</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <select class="form-control" id =birth_y>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                                <option>1995</option>
                                <option>1996</option>
                                <option>1997</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                            </select>
                            <select class="form-control" id =birth_m>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select class="form-control" id =birth_d>
                                <option>男</option>
                                <option>女</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">所在地</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <select class="form-control" id =location_province>
                                <option>江苏</option>
                                <option>河北</option>
                                <option>湖南</option>
                            </select>
                            <select class="form-control" id =location_city>
                                <option>南京</option>
                                <option>无锡</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">兴趣</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <select class="form-control" id =hobby>
                                <option>跑步</option>
                                <option>网球</option>
                                <option>滑板</option>
                                <option>篮球</option>
                                <option>排球</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 20px;font-family: '幼圆';line-height: 2;border:0px">跑步宣言</td>
                    <td style="border:0px">
                        <div class="col-xs-6 col-sm-9">
                            <input type="text" class="form-control" placeholder="昵称">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>

            <table class="table table-striped"id="avatarTab" style="display:none">
                <caption>编辑资料2</caption>
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

    $('#data').on('click', function() {
        this.className="active";
        document.getElementById('avatar').className="";
        document.getElementById('dataTab').style.display="";
        document.getElementById('avatarTab').style.display="none";
    });

    $('#avatar').on('click', function() {
        this.className="active";
        document.getElementById('data').className="";
        document.getElementById('avatarTab').style.display="";
        document.getElementById('dataTab').style.display="none";
    });
</script>


</body>

</html>