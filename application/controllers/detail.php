<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/11/1
 * Time: 14:30
 */
class detail extends CI_Controller
{
    public function activity(){
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $activityId =$_GET['activityId'];
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $activity =$this->Activity_model->getdetailactivity($activityId);
        $joiner =$this->Activity_model->getjoinmember($activityId);
        $judgejoin =0 ;
        $judgecollect =0;
        $join =$this->Activity_model->getjoinmember($activityId,$userId);
        $collect =$this->Activity_model->judgecollect($activityId,$userId);
        if(count($join)!=0){
            $judgejoin=1;
        }
        if(count($collect)!=0){
            $judgecollect=1;
        }
        $this->load->view("detail/activity",array('mydata'=>$activity,'joindata'=>$joiner,'judgejoin'=>$judgejoin,'judgecollect'=>$judgecollect));
    }

    public function advice(){
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $adviceId =$_GET['adviceId'];
        $this->load->model("Advice_model");
        $advice =$this->Advice_model->getdetailadvice($adviceId);
        $reply=$this->Advice_model->getreplybyadvice($adviceId);
        $this->load->view("detail/advice",array('thisadvice'=>$advice,'reply'=>$reply));

    }


    public function circle(){
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $circleId =$_GET['circleId'];
        $userId =$_SESSION['userId'];
        $this->load->model("User_model");
        $circle =$this->User_model->getdetailcircle($circleId);
        $circlemem =$this->User_model->getpartinmem($circleId);
        $join =$this->User_model->judgejoin($circleId,$userId);
        $judgejoin =0;
        if(count($join)!=0){
            $judgejoin=1;
        }
        $this->load->view("detail/circle",array('thiscircle'=>$circle,'circlemem'=>$circlemem,'judgejoin'=>$judgejoin));
    }

    public function topic(){
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $userId =$_SESSION['userId'];
        $topicId =$_GET['topicId'];
        $this->load->model("Topic_model");
        $topic =$this->Topic_model->detailtopic($topicId);
        $comment =$this->Topic_model->getcommentbyId($topicId);
        $judgeauthor=$this->Topic_model->judgepublisher($topicId,$userId);
        $judge= 0;
        if(count($judgeauthor)!=0){
            $judge= 1;
        }
        $this->load->view("detail/topic",array('thistopic'=>$topic,'comment'=>$comment,'judgeauthor'=>$judge));

    }


}