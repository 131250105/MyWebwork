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
<body style="background-color:#f3f3f3">
<?php include_once ('commerHeader.php');?>

<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-sm-12" style="background-color:white;
                box-shadow: inset 1px -1px 1px rgba(73, 70, 70, 0.31), inset -1px 1px 1px rgba(73, 70, 70, 0.31);
                border-radius: 15px;">
            <table class="table">
                <caption style="padding-left:5px;padding-top:20px;font-family: '华文中宋';">
                    <button type="button" class="btn btn-primary" style="padding-left: 40px;padding-right: 40px;">发帖</button>
                    <button type="button" class="btn btn-primary" style="padding-left: 40px;padding-right: 40px;">回复</button>
                </caption>
                <tbody>
                <tr>
                    <td style="">
                        查看:12
                    </td>
                    <td style="">
                        回复：1
                    </td>
                    <td colspan="7" style="background-color: white;font-family:'黑体';font-size:large">
                        吃点大蒜能防感冒 8种辣味食物有益健康
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: #DDD9D9;">
                        小编
                    </td>
                    <td style="background-color: white;" colspan="3">
                        发布于 10 小时前 | 只看该作者 | 倒序浏览
                    </td>
                    <td colspan="4" style="text-align: right;background-color: white;">
                        楼主
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2" style="background-color: #DDD9D9;">
                        <img src="<?php echo base_url('images/user_defaultHead_female.jpg');?>" class="img-rounded"
                             width="140px" >
                    </td>
                    <td colspan="7" rowspan="5" style="background-color: white;">
                        <p>
                            导读: 生活中有很多辣味食物，如生姜、大蒜和辣椒等都是菜肴中必不可少的调味品，大多数佳肴都少不了它们的存在。而且辣味食物对人体也有很多好处。下面我们就来看看哪些辣味食物对身体好处多多。……
                            各种辣味食物有益健康
                            1.生姜

                            生姜性温味辣，含有姜醇等油性挥发物，还有姜辣素、维生素、姜油酚、树脂、淀粉、纤维以及少量矿物质。能增强血液循环、刺激胃液分泌、兴奋肠道、促进消化、健胃增进食欲。
                            2.大蒜
                            大蒜性温味辛，含有蛋白质、脂肪、糖类、B族维生素、维生素C等营养成分，还有硫、硒有机化合物（大蒜素）以及多种活性酶，此外其钙、磷、铁等元素的含量也很丰富。它具有杀虫、解毒、消积、行气、温胃等功效，对饮食积滞、痢疾、百日咳、水肿胀痛、虫蛇咬伤等有一定的治疗作用。此外，吃大蒜还可以防流感、治疗霉菌感染，并具有降血压、降血脂、降血糖和较强的抗癌作用。
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td style="background-color: #DDD9D9;text-align: center;">
                        <p>1</p>
                        <p>主题</p>
                    </td>
                    <td style="background-color: #DDD9D9;text-align: center;">
                        <p>1</p>
                        <p>帖子</p>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #DDD9D9;">
                        发消息
                    </td>
                    <td style="background-color: #DDD9D9;"></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td style="background-color: #DDD9D9;"></td>
                    <td style="background-color: #DDD9D9;"></td>
                    <td style="background-color: white;">回复</td>
                    <td style="text-align: right;background-color: white;" colspan="6">举报</td>
                </tr>

                <tr>
                    <td style="background-color:rgb(172, 172, 172);padding: 3px;" colspan="2"></td>
                    <td style="background-color:rgb(229, 229, 229);;padding: 3px;" colspan="7"></td>
                </tr>
                <tr>
                    <td colspan="2" style="background-color: #DDD9D9;">
                        围观群众
                    </td>
                    <td style="background-color: white;" colspan="3">
                        发布于 10 小时前 | 只看该作者 | 倒序浏览
                    </td>
                    <td colspan="4" style="text-align: right;background-color: white;">
                        沙发
                    </td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2" style="background-color: #DDD9D9;">
                        <img src="<?php echo base_url('images/user_defaultHead_male.jpg');?>" class="img-rounded"
                             width="140px" >
                    </td>
                    <td colspan="7" rowspan="5" style="background-color: white;">
                        <p>
                            沙发！
                        </p>
                    </td>
                </tr>
                <tr></tr>
                <tr>
                    <td style="background-color: #DDD9D9;text-align: center;">
                        <p>0</p>
                        <p>主题</p>
                    </td>
                    <td style="background-color: #DDD9D9;text-align: center;">
                        <p>1</p>
                        <p>帖子</p>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #DDD9D9;">
                        发消息
                    </td>
                    <td style="background-color: #DDD9D9;"></td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <td style="background-color: #DDD9D9;"></td>
                    <td style="background-color: #DDD9D9;"></td>
                    <td style="background-color: white;">回复</td>
                    <td style="text-align: right;background-color: white;" colspan="6">举报</td>
                </tr>


                </tbody>
            </table>
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
