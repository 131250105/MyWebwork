<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/3
 * Time: 上午10:53
 */
include_once("bean/userbean.php");
class User_model extends CI_Model
{
    public function getUserByUserId($userId){
        $res = $this->db->from('user')
            ->where('userId',$userId)
            ->get();
        $userinfo =new userbean();
        foreach($res->result() as $item){
            $userinfo->setUserId($item->userId);
            $userinfo->setusername($item->username);
            $userinfo->setEmail($item->email);
            $userinfo->setUsertype($item->usertype);
            $userinfo->setProvince($item->province);
            $userinfo->setCity($item->city);
            $userinfo->setBirthyear($item->birthyear);
            $userinfo->setBirthmonth($item->birthmonth);
            $userinfo->setBirthday($item->birthday);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setSex($item->sex);
            $userinfo->setHobby($item->hobby);
            $userinfo->setDeclaration($item->declaration);
        }
        return $userinfo;
    }

    public function getuserbyemail($email){
        $res = $this->db->from('user')
            ->where('email',$email)
            ->get();
        $userinfo =new userbean();
        foreach($res->result() as $item){
            $userinfo->setUserId($item->userId);
            $userinfo->setusername($item->username);
            $userinfo->setEmail($item->email);
            $userinfo->setUsertype($item->usertype);
            $userinfo->setProvince($item->province);
            $userinfo->setCity($item->city);
            $userinfo->setBirthyear($item->birthyear);
            $userinfo->setBirthmonth($item->birthmonth);
            $userinfo->setBirthday($item->birthday);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setSex($item->sex);
            $userinfo->setHobby($item->hobby);
            $userinfo->setDeclaration($item->declaration);
        }
        return $userinfo;
    }

    public function login($email ,$password){
        $res = $this->db->from('user')
            ->where('email',$email)
            ->get();
        foreach($res->result() as $item){
            if($item->password ==$password)
                return $item->userId;
        }
        return -1;
    }

    public function insertuser($email ,$password ,$username ,$usertype
    ,$usersex,$userphoto){
        $data =array(
            'email' =>$email,
            'password' =>$password,
            'usertype' =>$usertype,
            'username' =>$username,
            'sex' =>$usersex,
            'photo' =>$userphoto,
        );
        return $this->db->insert("user",$data);
    }

    /*
     * 省市相关
     */
    public function getprovince(){
        $res = $this->db->select('sName')
            ->from('tcity')
            ->where('sBelongCode',"0")
            ->get();
        $result =array();
        foreach($res->result() as $item){
            Array_push($result,$item->sName);
        }
        return $result;
    }


    public function getprovinceidbyname($provincename){
        $res = $this->db->select('iCityId')
            ->from('tcity')
            ->where('sName',$provincename)
            ->get();
        foreach($res->result() as $item){
            $result=$item->sName;
        }
        return $result;
    }


    public function getcitybyprovince($provinceid){
        $res = $this->db->select('sName')
            ->from('tcity')
            ->where('sBelongCode',$provinceid)
            ->get();
        $result =array();
        foreach($res->result() as $item){
            Array_push($result,$item->sName);
        }
        return $result;
    }

}