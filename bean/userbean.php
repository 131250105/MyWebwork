<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/21
 * Time: 上午11:10
 */
class userbean
{
    private $userId;
    private $username;//email注册
    private $password;
    private $usertype;
    private $nickname;


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

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getUsertype()
    {
        return $this->usertype;
    }


    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
    }
}