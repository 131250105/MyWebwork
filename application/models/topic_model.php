<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/1
 * Time: 下午18:27
 */
include_once("bean/userbean.php");
include_once("bean/activitybean.php");
class topic_model extends CI_Model
{
    public function add($data){
        return $this->db->insert("topic",$data);
    }


    public function delete($data){

    }

    public function getalltopic(){
        $res=$this->db->from('topic')->limit(0,10)->get();
        return $res->result();
    }


    public function getmytopic($userId){
        $res=$this->db->from('topic')
            ->where('publisherId',$userId)
            ->limit(0,10)->get();
        return $res->result();
    }



}