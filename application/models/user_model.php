<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/3
 * Time: 上午10:53
 */
include("bean/userbean.php");
class User_model extends CI_Model
{
    public function getUserByUserId($userId){
        $res = $this->db->from('user')
            ->where('userid',$userId)
            ->get();
        return $res->result();
    }

    public function login($username ,$password){
        $res = $this->db->from('user')
            ->where('username',$username)
            ->get();
        foreach($res->result() as $item){
            if($item->password ==$password)
                return TRUE;
            else
                return FALSE;
        }
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