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
        $res=$this->db->from('advice')
            ->where('advicetype','help')
            ->limit(($index-1)*10,$index*10)
            ->get();
        return $res->result();
    }

    public function getcoachadvice($index){
        $res=$this->db->from('advice')
            ->where('advicetype','coach')
            ->limit(($index-1)*10,$index*10)
            ->get();
        return $res->result();
    }

    public function getdoctoradvice($index){
        $res=$this->db->from('advice')
            ->where('advicetype','doctor')
            ->limit(($index-1)*10,$index*10)
            ->get();
        return $res->result();
    }


    public function gethotadvice($usertype){
        $res=$this->db->from('advice')
            ->get();
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
}