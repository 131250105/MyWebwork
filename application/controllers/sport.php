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
        $this->load->model("User_model");
        $userId =$_SESSION['userId'];
        $data=$this->Sport_model->gethealthdatabyId($userId);
        $userlist=$this->User_model->gethotuser();
        $this->load->view("sport/index",array('data'=>$data,'userlist'=>$userlist));
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


    public function analysisdata()
    {
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $userId =$_SESSION['userId'];
        $filename =$_GET['file'];
        $xml = "";
        $f = fopen( $filename, 'r' );
        while( $data = fread($f, 4096)) {
            $xml .= $data;
        }
        fclose($f);
        preg_match_all( "/\<user\>(.*?)\<\/user\>/s",$xml,$userblocks);
        foreach($userblocks as $item) {
            foreach ($item as $block) {
                preg_match_all("/\<height\>(.*?)\<\/height\>/", $block, $height);
                preg_match_all("/\<weight\>(.*?)\<\/weight\>/", $block, $weight);
                preg_match_all("/\<pastsickness\>(.*?)\<\/pastsickness\>/", $block, $pastsickness);
                preg_match_all("/\<exercisetime\>(.*?)\<\/exercisetime\>/s", $block, $userblocks);
                preg_match_all("/\<sleeptime\>(.*?)\<\/sleeptime\>/s", $block, $sleeptime);
                preg_match_all("/\<BMI\>(.*?)\<\/BMI\>/s", $block, $BMI);
                preg_match_all("/\<ecomplete\>(.*?)\<\/ecomplete\>/s", $block, $ecomplete);
                preg_match_all("/\<hsleep\>(.*?)\<\/hsleep\>/s", $block, $hsleep);
                $data=array(
                    'userId' => $userId,
                    'height' => $height,
                    'weight' => $weight,
                    'BMI' => $BMI,
                    'healthsleep' => $hsleep,
                    'usefulexercise' => $ecomplete,
                    'sleeptime' => $sleeptime,
                    'exercisetime' => $ecomplete,
                );
        }
            $this->Sport_model->inserthealth($data);
        }

    }
}