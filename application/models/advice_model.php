<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/12/4
 * Time: 下午14:06
 */
class advice_model extends CI_Model
{
    public function gethelpadvice($index){
        $sql = 'select a.adviceId , a.publishername , a.advicetitle , count(replyId) as replynum , ifnull(s.lasttime,0) as lasttime'.
            ' from advice a left join reply r on a.adviceId =r.adviceId '.
            ' left join (select r1.adviceId , max(r1.createdAt) as lasttime from reply r1 group by r1.adviceId) s'.
            ' on  a.adviceId =s.adviceId'.
            ' where a.advicetype = \'help\''.
            ' group by a.adviceId'.
            ' limit 0,10;';
        $res=$this->db->query($sql);
        return $res->result();
    }

    public function getcoachadvice($index){
        $sql = 'select a.adviceId , a.publishername , a.advicetitle , count(replyId) as replynum , ifnull(s.lasttime,0) as lasttime'.
            ' from advice a left join reply r on a.adviceId =r.adviceId '.
            ' left join (select r1.adviceId , max(r1.createdAt) as lasttime from reply r1 group by r1.adviceId) s'.
            ' on  a.adviceId =s.adviceId'.
            ' where a.advicetype = \'coach\''.
            ' group by a.adviceId'.
            ' limit 0,10;';
        $res=$this->db->query($sql);
        return $res->result();
    }

    public function getdoctoradvice($index){
        $sql = 'select a.adviceId , a.publishername , a.advicetitle , count(replyId) as replynum , ifnull(s.lasttime,0) as lasttime'.
            ' from advice a left join reply r on a.adviceId =r.adviceId '.
            ' left join (select r1.adviceId , max(r1.createdAt) as lasttime from reply r1 group by r1.adviceId) s'.
            ' on  a.adviceId =s.adviceId'.
            ' where a.advicetype = \'doctor\''.
            ' group by a.adviceId'.
            ' limit 0,10;';
        $res=$this->db->query($sql);
        return $res->result();
    }


    public function gethotadvice($usertype){
        $sql = 'select a.adviceId , a.publishername , a.advicetitle , count(replyId) as replynum , ifnull(s.lasttime,0) as lasttime'.
        ' from advice a left join reply r on a.adviceId =r.adviceId '.
        ' left join (select r1.adviceId , max(r1.createdAt) as lasttime from reply r1 group by r1.adviceId) s'.
        ' on  a.adviceId =s.adviceId'.
        ' group by a.adviceId'.
        ' limit 0,10;';
        $res=$this->db->query($sql);
        return $res->result();
    }

    public function getlatesthelp(){
        $res=$this->db->from('advice')
            ->where('advicetype','help')
            ->order_by('adviceId','desc')
            ->limit(0,1)
            ->get();
        return $res->result();
    }

    public function getlatestcoach(){
        $res=$this->db->from('advice')
            ->where('advicetype','coach')
            ->order_by('adviceId','desc')
            ->limit(0,1)
            ->get();
        return $res->result();
    }

    public function getlatestdoctor(){
        $res=$this->db->from('advice')
            ->where('advicetype','doctor')
            ->order_by('adviceId','desc')
            ->limit(0,1)
            ->get();
        return $res->result();
    }

    public function getdetailadvice($adviceId){
        $res=$this->db->from('advice')
            ->join('user','advice.publisherId=user.userId')
            ->where('adviceId',$adviceId)
            ->get();
        return $res->result();
    }

    public function addadvice($data){
        $this->db->insert("advice",$data);
    }


    public function addreply($data){
        $this->db->insert("reply",$data);
    }

    public function getreplybyadvice($adviceId){
        $res=$this->db->from('advice')
                      ->where('adviceId',$adviceId)
                      ->get();
        return $res->result();
    }

}