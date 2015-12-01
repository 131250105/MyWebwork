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
        $this->load->model("Topic_model");

    }


}