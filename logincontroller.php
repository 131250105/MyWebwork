<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/9/18
 * Time: 下午14:30
 */
header('charset: utf-8;');
include("database.php");
    $check=false;
    $db=database::getInstance();
    $sql="select * from user where username = '".$_POST["username"]."' and "."password = '"
        .$_POST["password"]."'";
    $db->connect();
    $result=$db->query($sql);

    while($row = $result->fetch_row())
    {
        $check=true;
        $username=$row[1];
        $userid=$row[0];
    }

    if($check){
        echo "welcome ".$username;
        echo "</br>";
        echo "Your userid is ".$userid;
    }else{
        echo "wrong username or password";
    }
    $db->close();
