<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午15:14
 */
include_once("bean/userbean.php");
?>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url('css/bootstrap.min.css');?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('css/header.css');?>" media="screen" type="text/css" />
    <!-- [endif]-->
    <script src=" <?php echo base_url('js/jquery-2.1.4.min.js');?> "></script>
    <script src=" <?php echo base_url('js/bootstrap.min.js');?> "></script>
    <script src=" <?php echo base_url('js/loginAndregister.js');?>"></script>
    <script src=" <?php echo base_url('js/md5.js');?>"></script>
    <script src="<?php echo base_url('js/header.js');?>"></script>

    <style type="text/css">
        @font-face {
            font-family: 'Glyphicons Halflings';

            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot');?>');
            src: url('<?php echo base_url('fonts/glyphicons-halflings-regular.eot?#iefix');?>') format('embedded-opentype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.woff');?>') format('woff'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.ttf');?>') format('truetype'),
            url('<?php echo base_url('fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular');?>') format('svg');
        }

        td {
            font-family: '微软雅黑';
        }

    </style>

</head>
<body  style="background: #fff url('http://127.0.0.1/mywebwork/images/green (6).jpg') no-repeat left top;
background-size: 200%;">
<?php include_once ('commerHeader.php');?>

<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-sm-12" style="
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
            <div style="border-radius: 15px;background-image: url('http://127.0.0.1/mywebwork/images/green (6).jpg');width: 100%;height: 100%;left: 0;
                    top: 0;filter: alpha(opacity=50);opacity: 0.2;position: absolute;-webkit-filter: blur(1px);z-index: -1;">
            </div>
            <table class="table">
                <caption style="padding-left:5px;padding-top:20px;font-family: '华文中宋';">
                    <button type="button" class="btn btn-primary" style="padding-left: 40px;padding-right: 40px;">发帖</button>
                    <button type="button" class="btn btn-primary" style="padding-left: 40px;padding-right: 40px;"
                            data-toggle="modal" data-target="#submitNewNicknameDiv"
                            data-backdrop="static" style="font-size: 16px;color:black" href="javascript::void(0)">回复</button>
                </caption>
                <tbody>
                <?php $c=0;?>
                <?php foreach($thisadvice as $item){?>
                    <tr>
                        <td style="" width="7%">
                            查看:12
                        </td>
                        <td style="" width="7%">
                            回复：1
                        </td>
                        <td colspan="7" style="background-color: rgba(255, 255, 255, 0.42);;font-family:'黑体';font-size:large">
                            <?php echo $item->advicetitle?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"  data-toggle="tooltip" title="<?php echo $item->publishername?>"
                            style="display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">
                            <?php echo $item->publishername?>
                        </td>
                        <td style="background-color: rgba(255, 255, 255, 0.42);;" colspan="3">
                            发布于 <?php echo $item->createdAt?> | 只看该作者 | 倒序浏览
                        </td>
                        <td colspan="4" style="text-align: right;background-color: rgba(255, 255, 255, 0.42);;">
                            <?php $c++;
                            if($c==1)echo '楼主';
                            else if($c==2)echo '沙发';
                            else if($c==3)echo '凳子';
                            else if($c==4)echo '地板';
                            else echo $c.'楼';?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" rowspan="2" style="">
                            <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-rounded"
                                 width="140px" >
                        </td>
                        <td colspan="7" rowspan="5" style="background-color: rgba(255, 255, 255, 0.42);;">
                            <p><?php echo $thisadvice[0]->advicecontent?></p>
                        </td>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td style="text-align: center;">
                            <p>1</p>
                            <p>主题</p>
                        </td>
                        <td style="text-align: center;">
                            <p>1</p>
                            <p>帖子</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="border:0px">
                        </td>
                        <td style="border:0px"></td>
                    </tr>
                    <tr>

                    </tr>
                    <tr>
                        <td style=""></td>
                        <td style=""></td>
                        <td style="background-color: rgba(255, 255, 255, 0.42);;">回复</td>
                        <td style="text-align: right;background-color: rgba(255, 255, 255, 0.42);;" colspan="6">举报</td>
                    </tr>

                    <tr>
                        <td style="padding: 3px;" colspan="2"></td>
                        <td style="padding: 3px;" colspan="7"></td>
                    </tr>
                <?php } ?>




                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <p style="visibility: hidden">位置调整</p>
    </div>
</div>

<div class="modal fade" id="submitNewNicknameDiv" tabindex="-1"
     role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" align="center">
        <div class="modal-content"  align="left" style="width:400px;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">账号登录</h4>
            </div>
            <div class="alert alert-warning"  id="emptyLoginTip_id" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名为空</div>
            <div class="alert alert-warning"  id="emptyLoginTip_password" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;密码为空</div>
            <div class="alert alert-danger"  id="errorLoginTip" style="margin-bottom: 0px;display:none;padding: 8px;">&nbsp;&nbsp;用户名或密码错误</div>
            <form class="form-horizontal" role="form"  style="padding:30px 50px;">
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="email"
                               placeholder="邮箱">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="loginpassword"
                               placeholder="密码">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <label for="email">用户类型</label>
                        <select class="form-control" id =logintype>
                            <option>普通用户</option>
                            <option>健康教练</option>
                            <option>医生</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="checkbox">
                            <label> <input type="checkbox" id="remember"> 记住我
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="button" class="btn btn-primary btn-block"
                                onclick="login()" style="">登录</button>
                    </div>
                </div>
            </form>



        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal -->
</div>

<div style="text-align: right;background-color: #222222;color: grey;font-family: '微软雅黑 light';padding: 30px 30px 20px 30px;">
    MyHealth————您的健康管理专家
</div>


</body>

</html>
