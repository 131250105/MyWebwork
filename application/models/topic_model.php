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

    public function delete($topicId){
        $this->db->from('topic')->where('topicId',$topicId)->delete();
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

    public function gettopicbyId($topicId){
        $res=$this->db->select('praisenum')
            ->from('topic')
            ->where('topicId',$topicId)
            ->get();
        return $res->result();
    }

    public function update($data,$topicId){
        $this->db->where('topicId',$topicId)->update('topic', $data);
    }

    public function detailtopic($topicId){
        $res=$this->db
            ->from('topic')
            ->where('topicId',$topicId)
            ->get();
        return $res->result();
    }


    public function getcommentbyId($topicId){
        $res=$this->db
            ->from('commenttopic')
            ->where('commenttopicId',$topicId)
            ->get();
        return $res->result();
    }

    public function addcomment($data){
        return $this->db->insert("commenttopic",$data);
    }

    public function deletecomment($topicId,$userId){
            $this->db->from('commenttopic')
                ->where('commentuserId',$userId)
                ->where('commenttopicId',$topicId)
                ->delete();
    }

    public function judgepublisher($topicId,$userId){
        $res=$this->db
            ->from('topic')
            ->where('topicId',$topicId)
            ->where('publisherId',$userId)
            ->get();
        return $res->result();
    }
}