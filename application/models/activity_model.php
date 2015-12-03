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
        $res=$this->db->from('Activity')
            ->limit(($index-1)*5,$index*5)
            ->get();
        return $res->result();
    }

    public function getpublishactivity($userId,$index){
        $res=$this->db->from('Activity')
            ->where('publisherId',$userId)
            ->limit(($index-1)*5,$index*5)
            ->get();
        return $res->result();
    }

    public function getcollacteactivity($userId,$index){
        $res=$this->db
            ->from('activitycollacte')
            ->join('Activity','Activity.ActivityId = activitycollacte.collacteactivityId')
            ->where('activitycollacte.collacteuserId',$userId)
            ->limit(($index-1)*5,$index*5)
            ->get();
        return $res->result();
    }

    public function getjoinactivity($userId,$index){
        $res=$this->db
            ->from('activitypartin')
            ->join('Activity','Activity.ActivityId = activitypartin.partinactivityid')
            ->where('activitypartin.partinuserid',$userId)
            ->limit(($index-1)*5,$index*5)
            ->get();
        return $res->result();
    }

    public function getdetailactivity($activityId){
        $res=$this->db
            ->from('Activity')
            ->where('Activity.ActivityId',$activityId)
            ->get();
        return $res->result();
    }

    public function getjoinmember($activityId){
        $res=$this->db
            ->from('activitypartin')
            ->join('user','activitypartin.partinuserid =user.userId')
            ->where('partinactivityid',$activityId)
            ->get();
        return $res->result();
    }

    public function judgejoin($activityId,$userId){
        $res=$this->db
            ->from('activitypartin')
            ->where('partinactivityid',$activityId)
            ->where('partinuserid',$userId)
            ->get();
        return $res->result();
    }

    public function judgecollect($activityId,$userId){
        $res=$this->db
            ->from('activitycollacte')
            ->where('collacteactivityId',$activityId)
            ->where('collacteuserId',$userId)
            ->get();
        return $res->result();
    }
}