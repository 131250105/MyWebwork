<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/1
 * Time: 下午22:16
 */
?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome!</title>
</head>
<body>
    <?php foreach($userlists as $row){
        echo $row->userid;
    } ?>
</body>
</html>

