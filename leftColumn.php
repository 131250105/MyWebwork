<div class="col-xs-6 col-sm-4.8"
     style="">
    <p style="visibility: hidden">位置调整</p>
    <img src="<?php echo $_SESSION['userphoto'];?>"
         class="img-responsive"  alt="Cinque Terre">
    <p style="visibility: hidden">位置调整</p>
</div>
<div class="col-xs-6 col-sm-7.2"
     style="">
    <p style="visibility: hidden">位置调整</p>
    <p data-toggle="tooltip" title="<?php echo $_SESSION['username'];?>"
       style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">昵称：<?php echo $_SESSION['username'];?></p>
    <p data-toggle="tooltip" title="<?php echo $_SESSION['usersex'];?>"
       style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">性别：<?php echo $_SESSION['usersex'];?></p>
    <p data-toggle="tooltip" title="<?php echo $_SESSION['usertype'];?>"
       style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">类型：<?php echo $_SESSION['usertype'];?></p>
    <p data-toggle="tooltip" title="<?php echo $_SESSION['userlocation'];?>"
       style="font-family: '微软雅黑';display: block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;">所在地：<?php echo $_SESSION['userlocation'];?></p>
    <p style="visibility: hidden">位置调整</p>
    <!--glyphicon glyphicon-leaf
    glyphicon glyphicon-wrench
    glyphicon glyphicon-pushpin-->
</div>

<script>
    $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>