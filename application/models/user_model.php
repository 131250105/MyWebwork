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
            $userinfo->setAddress($item->address);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setQq($item->qq);
            $userinfo->setSex($item->sex);
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
            $userinfo->setAddress($item->address);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setQq($item->qq);
            $userinfo->setSex($item->sex);
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
}