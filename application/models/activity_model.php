<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/11/30
 * Time: 下午15:53
 */
include_once("bean/userbean.php");
include_once("bean/activitybean.php");
class activity_model extends CI_Model
{

    public function add($data){
        return $this->db->insert("Activity",$data);
    }
}