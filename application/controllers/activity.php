<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午18:54
 */
class activity extends CI_Controller
{

    public function addactivity(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $ActivityName =$this->input->post('name');
        $ActivityIntro =$this->input->post('intro');
        $Activitystarttime =$this->input->post('starttime');
        $ActivityEndtime =$this->input ->post('endtime');
        $Activitylocation =$this->input->post('location');
        $Activitybeizhu =$this->input->post('beizhu');
        $data =array(
            'ActivityName' =>$ActivityName,
            'ActivityIntro' =>$ActivityIntro,
            'Activitystarttime' =>$Activitystarttime,
            'ActivityEndtime' =>$ActivityEndtime,
            'Activitylocation' =>$Activitylocation,
            'Activitybeizhu' =>$Activitybeizhu,
            'publisherId'=>$userId,
        );
        $this->Activity_model->add($data);
    }


    public function joinactivity(){

    }

    public function collacteactivity(){

    }

    public function userindex(){
        $this->load->view("activity/index");
    }

    public function search(){
        $this->load->view("activity/search");
    }

    public function joined(){
        $this->load->view("activity/joined");
    }

    public function published(){
        $this->load->view("activity/published");
    }

    public function collected(){
        $this->load->view("activity/collected");
    }

    public function publishing(){
        $this->load->view("activity/publishing");
    }
}