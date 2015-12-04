<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/4
 * Time: 下午20:27
 */
class welcome_model extends CI_Model
{
    public function getindextopic(){
        $res=$this->db->from('topic')->limit(0,3)->get();
        return $res->result();
    }


    public function getindexactivity(){
        $res=$this->db->from('Activity')->limit(0,3)->get();
        return $res->result();
    }


    public function getindexadvice(){
        $res=$this->db->from('advice')
            ->where('advicetype','coach')
            ->or_where('advicetype','doctor')
            ->limit(0,2)
            ->get();
        return $res->result();
    }
}