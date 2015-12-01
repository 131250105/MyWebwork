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
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $activityId =$this->input->post('activityId');
        $time=date("Y-m-d H:i:s");
        $data =array(
            'partinuserid'=> $userId,
            'partinactivityid'=>$activityId,
            'partintime'=>$time,
        );
        $this->Activity_model->join($data);
    }

    public function canceljoinactivity(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $activityId =$this->input->post('activityId');
        $this->Activity_model->cnaceljoin($userId,$activityId);
    }

    public function collacteactivity(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $activityId =$this->input->post('activityId');
        $time=date("Y-m-d H:i:s");
        $data =array(
            'collacteuserId'=> $userId,
            'collacteactivityId'=>$activityId,
            'collactetime'=>$time,
        );
        $this->Activity_model->collacte($data);
    }

    public function cancelcollacteactivity(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $activityId =$this->input->post('activityId');
        $this->Activity_model->cnacelcollacte($userId,$activityId);
    }

    public function userindex(){
        $this->load->model("Activity_model");
        $mydata = $this->Activity_model->getallactivity(0);
        $this->load->view("activity/index",$mydata);
    }

    public function search(){
        $this->load->view("activity/search");
    }

    public function joined(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $mydata = $this->Activity_model->getjoinactivity($userId,0);
        $this->load->view("activity/joined",$mydata);
    }

    public function published(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $mydata = $this->Activity_model->getpublishactivity($userId,0);
        $this->load->view("activity/published",$mydata);
    }

    public function collected(){
        $this->load->model("Activity_model");
        $userId =$_SESSION['userId'];
        $mydata = $this->Activity_model->getcollacteactivity($userId,0);
        $this->load->view("activity/collected",$mydata);
    }

    public function publishing(){
        $this->load->view("activity/publishing");
    }


    public function searchbytime(){
        $starttime =$this->input->post('starttime');
    }

    public function searchbykey(){
        $key =$this->input->post('key');
    }
}