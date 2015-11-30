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

    public function join($data){
        return $this->db->insert("activitypartin",$data);
    }

    public function canceljoin($userId,$activityId){
        $this->db->where('partinuserid',$userId)
            ->where('partinactivityid',$activityId)
            ->delete('activitypartin');
    }

    public function collacte($data){
        return $this->db->insert("activitycollacte",$data);
    }

    public function cancelcollacte($userId,$activityId){
        $this->db->where('collacteuserId',$userId)
            ->where('collacteactivityId',$activityId)
            ->delete('activitycollacte');
    }

    public function getallactivity($index){
        $this->db->get('Activity')
            ->limit(($index-1)*5,$index*5);
    }

    public function getpublishactivity($userId){

    }

    public function getcollacteactivity($userId){

    }

    public function getjoinactivity($userId){

    }
}