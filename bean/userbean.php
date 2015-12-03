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
    private $province;
    private $city;
    private $birthyear;
    private $birthmonth;
    private $birthday;
    private $isonline;
    private $isbanned;
    private $photo;
    private $sex;
    private $hobby;
    private $declaration;
    private $createdAt;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
    private $state;

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

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


    public function getSex()
    {
        return $this->sex;
    }


    public function setSex($sex)
    {
        $this->sex = $sex;
    }

    public function getProvince()
    {
        return $this->province;
    }


    public function setProvince($province)
    {
        $this->province = $province;
    }


    public function getCity()
    {
        return $this->city;
    }


    public function setCity($city)
    {
        $this->city = $city;
    }


    public function getBirthyear()
    {
        return $this->birthyear;
    }


    public function setBirthyear($birthyear)
    {
        $this->birthyear = $birthyear;
    }


    public function getBirthmonth()
    {
        return $this->birthmonth;
    }

    public function setBirthmonth($birthmonth)
    {
        $this->birthmonth = $birthmonth;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    public function getHobby()
    {
        return $this->hobby;
    }


    public function setHobby($hobby)
    {
        $this->hobby = $hobby;
    }


    public function getDeclaration()
    {
        return $this->declaration;
    }


    public function setDeclaration($declaration)
    {
        $this->declaration = $declaration;
    }
}