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
    private $email;
    private $username;
    private $password;
    private $usertype;
    private $address;
    private $isonline;
    private $isbanned;
    private $photo;
    private $qq;
    private $sex;

    public function getusername(){
        return $this->username;
    }

    public function getpassword(){
        return $this->password;
    }



    public function setusername($username){
        $this->username = $username;
    }

    public function setpassword($password){
        $this->password =$password;
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


    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getIsbanned()
    {
        return $this->isbanned;
    }


    public function setIsbanned($isbanned)
    {
        $this->isbanned = $isbanned;
    }

    public function getIsonline()
    {
        return $this->isonline;
    }


    public function setIsonline($isonline)
    {
        $this->isonline = $isonline;
    }

    public function getPhoto()
    {
        return $this->photo;
    }


    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getQq()
    {
        return $this->qq;
    }


    public function setQq($qq)
    {
        $this->qq = $qq;
    }

    public function getSex()
    {
        return $this->sex;
    }


    public function setSex($sex)
    {
        $this->sex = $sex;
    }
}