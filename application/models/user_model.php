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
            $userinfo->setnickname($item->nickname);
            $userinfo->setUsertype($item->usertype);
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

    public function insertuser($username ,$password ,$nickname ,$usertype){
        $data =array(
            'username' =>$username,
            'password' =>$password,
            'usertype' =>$usertype,
            'nickname' =>$nickname,
        );
        return $this->db->insert("user",$data);
    }
}