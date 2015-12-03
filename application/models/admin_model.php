<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/3
 * Time: 下午16:28
 */
class admin_model extends CI_Model
{
    public function getadminbyadminname($adminname){
        $res = $this->db->from('user')
            ->where('eamil',$adminname)
            ->where('usertype','admin')
            ->get();
        return $res->result();
    }
}