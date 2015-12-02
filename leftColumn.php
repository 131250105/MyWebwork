<div class="col-xs-6 col-sm-4.8"
     style="">
    <p style="visibility: hidden">位置调整</p>
    <img src="<?php echo $user->getPhoto();?>"
         class="img-responsive"  alt="Cinque Terre">
    <p style="visibility: hidden">位置调整</p>
</div>
<div class="col-xs-6 col-sm-7.2"
     style="">
    <p style="visibility: hidden">位置调整</p>
    <p style="font-family: '微软雅黑';">昵称：<?php echo $user->getusername();?></p>
    <p style="font-family: '微软雅黑';">性别：<?php echo $user->getSex();?></p>
    <p style="font-family: '微软雅黑';">年龄：</p>
    <p style="font-family: '微软雅黑';">所在地：<?php echo $user->getProvince().$user->getCity();?></p>
    <p style="visibility: hidden">位置调整</p>
    <!--glyphicon glyphicon-leaf
    glyphicon glyphicon-wrench
    glyphicon glyphicon-pushpin-->
</div>