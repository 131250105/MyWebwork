<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/10/31
 * Time: 13:43
 */
class sport extends CI_Controller
{
    public function userindex(){
        $this->load->model("Sport_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $this->load->view("sport/index",array('data'=>$data));
    }

    public function administration(){
        $this->load->model("Sport_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $this->load->view("sport/administration",array('data'=>$data));
    }

    public function track(){
        $this->load->model("Sport_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $this->load->view("sport/track",array('data'=>$data));
    }

    public function sleepAnalysis(){
        $this->load->model("Sport_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $this->load->view("sport/sleepAnalysis",array('data'=>$data));
    }

    public function ride(){
        $this->load->model("Sport_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $this->load->view("sport/ride",array('data'=>$data));
    }


    public function initaldata(){
        $this->load->model("Sport_model");
        for($i=0;$i<500;$i++){
            $userId = 9;
            $healthsleep = 0.80;
            $usefulexercise = 0.70;
            $sleeptime = rand(6, 9);
            $exercisetime = rand(0, 5);
            $data=array(
                'userId' => $userId,
                'height' => 180,
                'weight' => 70,
                'BMI' => 21.60,
                'healthsleep' => $healthsleep,
                'usefulexercise' => $usefulexercise,
                'sleeptime' => $sleeptime,
                'exercisetime' => $exercisetime,
            );
            $this->Sport_model->inserthealth($data);
        }
        echo "success";
    }


    public function adddata(){
        $simple = "<para><note>simple note</note></para>";
        $p = xml_parser_create();
        xml_parse_into_struct($p, $simple, $vals, $index);
        xml_parser_free($p);
        echo "Index array\n";
        print_r($index);
        echo "\nVals array\n";
        print_r($vals);
    }
}