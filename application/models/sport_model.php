<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/5
 * Time: 下午22:23
 */
class sport_model  extends CI_Model
{
    public function inserthealth($data){
        return $this->db->insert("healthdata",$data);
    }

    public function gethealthdatabyId($userId){
        $res=$this->db
            ->from('healthdata')
            ->where('userId',$userId)
            ->order_by('healthdataId','desc')
            ->limit('10')
            ->get();
        return $res->result();
    }
}