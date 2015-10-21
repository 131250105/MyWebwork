<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/21
 * Time: 上午11:10
 */
class userbean
{
    private $username;//email注册
    private $password;
    private $nickname;

    public function __construct($username,$password,$nickname)
    {
        $this->username=$username;
        $this->password=$password;
        $this->nickname=$nickname;
    }

    public function getusername(){
        return $this->username;
    }

    public function getpassword(){
        return $this->password;
    }

    public function getnickname(){
        return $this->nickname;
    }

    public function setusername($username){
        $this->username = $username;
    }

    public function setpassword($password){
        $this->password =$password;
    }

    public function setnickname($nickname){
        $this->nickname=$nickname;
    }
}