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
        $this->load->view("detail/advice");
    }

}