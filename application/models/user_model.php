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
            $userinfo->setCreatedAt($item->createdAt);
            $userinfo->setState($item->state);
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

    public function update($userid,$data){
        $this->db->update('user',$data,array('userId'=>$userid));
    }

    public function login($email ,$password,$usertype){
        $res = $this->db->from('user')
            ->where('email',$email)
            ->where('usertype',$usertype)
            ->get();
        foreach($res->result() as $item){
            if($item->password ==$password)
                return $item->userId;
        }
        return -1;
    }

    public function insertuser($email ,$password ,$username ,$usertype
    ,$usersex,$userphoto,$createdAt){
        $data =array(
            'email' =>$email,
            'password' =>$password,
            'usertype' =>$usertype,
            'username' =>$username,
            'sex' =>$usersex,
            'photo' =>$userphoto,
            'createdAt' =>$createdAt,
            'state'=>0,
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
            ->where('sBelongCode',0)
            ->get();
        foreach($res->result() as $item){
            $result=$item->iCityId;
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

    public function addfriend($data){
        $this->db->insert("friendship",$data);
    }

    public function updatefriend($firstuser,$seconduser,$data){
        $this->db->where('firstuserid',$firstuser)
             ->where('seconduserid',$seconduser)
             ->update('friendship',$data)
             ->set();
    }

    public function getallfriends($userId){
        $res = $this->db
            ->from('tcity')
            ->where('firstuserid',$userId)
            ->where('state',1)
            ->orwhere('seconduserid',$userId)
            ->get();
        return $res->result();
    }
}