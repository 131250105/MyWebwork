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
        $activity =$this->Activity_model->getdetailactivity($activityId);
        $this->load->view("detail/activity",array('mydata'=>$activity));
    }

    public function advice(){
        $this->load->view("detail/advice");
    }

}