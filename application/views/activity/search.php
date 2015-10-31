<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午19:02
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


<div class="container">
    <div class="row" >
        <div class="col-xs-3 col-sm-3"
             style="">
            <div class="row">
                <div class="col-xs-6 col-sm-4.8"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded" width="100%" align="center">
                </div>
                <div class="col-xs-6 col-sm-7.2"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <p style="font-family: '微软雅黑';">昵称：</p>
                    <p style="font-family: '微软雅黑';">性别：</p>
                    <p style="font-family: '微软雅黑';">年龄：</p>
                    <p style="font-family: '微软雅黑';">所在地：</p>
                    <p style="visibility: hidden">位置调整</p>
                    <!--glyphicon glyphicon-leaf
                    glyphicon glyphicon-wrench
                    glyphicon glyphicon-pushpin-->
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <button type="button" class="btn btn-primary btn-block">
                        <span class="glyphicon glyphicon-flag"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;发起活动
                    </button>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12"
                     style="">
                    <p style="visibility: hidden">位置调整</p>
                    <ul class="nav nav-pills nav-stacked">
                        <li><a href="<?php echo site_url("activity/userindex")?>">活动一览</a></li>
                        <li class="active"><a href="<?php echo site_url("activity/search")?>">活动搜索</a></li>
                        <li><a href="<?php echo site_url("activity/joined")?>">我参与的活动</a></li>
                        <li><a href="<?php echo site_url("activity/published")?>">我发布的活动</a></li>
                        <li><a href="<?php echo site_url("activity/collected")?>">我收藏的活动</a></li>
                    </ul>
                    <p style="visibility: hidden">位置调整</p>
                </div>
            </div>
        </div>
        <div class="col-xs-9 col-sm-9"
             style="background-color:white;box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);border-radius: 15px;"">
        <table class="table table-hover">
            <caption style="padding:20px;font-family: '华文中宋';font-size: x-large;line-height: 2;">活动搜索</caption>
            <thead style="text-align:center">
            <tr>
                <th colspan="5">
                    精确搜索
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="5">
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="keyWord" class="col-sm-2 control-label" style="font-family: '幼圆';">关键字</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="keyWord"
                                       placeholder="请输入关键字">
                            </div>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary btn-block">
                                    <span class="glyphicon glyphicon-search"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;搜索
                                </button>
                            </div>
                        </div>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>

        <table class="table table-hover">
            <thead style="text-align:center">
            <tr>
                <th colspan="5">
                    条件搜索
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td colspan="5">
                    <div class="col-sm-2" style="padding: 10px;">
                        多选
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">选项 1</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">选项 2</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">选项 3</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">选项 4</label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="checkbox">
                            <label><input type="checkbox" value="">选项 5</label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="col-sm-2" style="padding: 10px;">
                        单选
                    </div>
                    <div class="col-sm-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1"
                                       value="option1" checked> 选项 1
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2"
                                       value="option2">选项 2
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3"
                                       value="option3">选项 3
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios4"
                                       value="option4">选项 4
                            </label>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios5"
                                       value="option5">选项 5
                            </label>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="col-sm-2" style="padding: 10px;">
                        选择列表
                    </div>
                    <div class="col-sm-4">
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-md-offset-2">
                        <div class="btn-group" data-toggle="buttons">
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option1"> 选项 1
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option2"> 选项 2
                            </label>
                            <label class="btn btn-primary">
                                <input type="radio" name="options" id="option3"> 选项 3
                            </label>
                        </div>
                    </div>
                </td>
            </tr>


            </tbody>
        </table>

        <div align="center">
            <ul class="pagination">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul><br>
        </div>
    </div>
</div>
</div>

</body>

</html>