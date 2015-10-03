<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/3
 * Time: 上午10:53
 */
class User_model extends CI_Model
{
    public function getUserByUsername($username){
        $res = $this->db->from('user')
            ->where('username',$username)
            ->get();
        return $res->result();
    }
}