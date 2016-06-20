<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午18:54
 */
class advice extends CI_Controller
{
    public function userindex(){
        $this->load->model("Advice_model");
        if($_GET['page'])$page =$_GET['page'];
        $hotadvice =$this->Advice_model->gethotadvice(0);
        $lasthelpadvice =$this->Advice_model->getlatesthelp();
        $lastcoachadvice =$this->Advice_model->getlatestcoach();
        $lastdoctoradvice =$this->Advice_model->getlatestdoctor();
        $this->load->view("advice/index",array('hotadvice'=>$hotadvice,'lasthelpadvice'=>$lasthelpadvice,'lastcoachadvice'=>$lastcoachadvice,'lastdoctoradvice'=>$lastdoctoradvice,'page' => $page));
    }

    public function forHelp(){
        $this->load->model("Advice_model");
        if($_GET['page'])$page =$_GET['page'];
        $helpadvice =$this->Advice_model->gethelpadvice(0);
        $this->load->view("advice/forHelp",array('advice'=>$helpadvice,'page' => $page));
    }

    public function doctor(){
        $this->load->model("Advice_model");
        if($_GET['page'])$page =$_GET['page'];
        $doctoradvice =$this->Advice_model->getdoctoradvice(0);
        $this->load->view("advice/doctor",array('advice'=>$doctoradvice,'page' => $page));
    }

    public function coach(){
        $this->load->model("Advice_model");
        if($_GET['page'])$page =$_GET['page'];
        $helpadvice =$this->Advice_model->getcoachadvice(0);
        $this->load->view("advice/coach",array('advice'=>$helpadvice,'page' => $page));
    }

    public function post(){
        $this->load->view("advice/post");
    }

    public function postadvice(){
        $this->load->model("Advice_model");
        $usertype=$_SESSION['usertype'];
        $userId =$_SESSION['userId'];
        $username =$_SESSION['username'];
        $adviceTitle =$this->input->post('adviceTitle');
        $adviceContent =$this->input->post('adviceContent');
        $adviceplace =$this->input->post('adviceplace');
        if($adviceplace=="医生板块"){
            if($usertype!="医生"){
                echo "typefail";
            }
            else{
                if($adviceplace=="医生板块"){
                    $adviceplace="doctor";
                }
                else if($adviceplace=="教练板块"){
                    $adviceplace="coach";
                }
                else{
                    $adviceplace="help";
                }
                $time=date("Y-m-d H:i:s");
                $data =array(
                    'advicecontent'=> $adviceContent,
                    'advicetitle'=>$adviceTitle,
                    'advicetype'=>$adviceplace,
                    'createdAt'=>$time,
                    'publisherId'=>$userId,
                    'publishername'=>$username,
                );
                $this->Advice_model->addadvice($data);
                echo "success";
            }
        }
        else if($adviceplace=="教练板块"){
            if($usertype!="健康教练"){
                echo "typefail";
            }
            else{
                if($adviceplace=="医生板块"){
                    $adviceplace="doctor";
                }
                else if($adviceplace=="教练板块"){
                    $adviceplace="coach";
                }
                else{
                    $adviceplace="help";
                }
                $time=date("Y-m-d H:i:s");
                $data =array(
                    'advicecontent'=> $adviceContent,
                    'advicetitle'=>$adviceTitle,
                    'advicetype'=>$adviceplace,
                    'createdAt'=>$time,
                    'publisherId'=>$userId,
                    'publishername'=>$username,
                );
                $this->Advice_model->addadvice($data);
                echo "success";
            }
        }

        else{
            if($adviceplace=="医生板块"){
                $adviceplace="doctor";
            }
            else if($adviceplace=="教练板块"){
                $adviceplace="coach";
            }
            else{
                $adviceplace="help";
            }
            $time=date("Y-m-d H:i:s");
            $data =array(
                'advicecontent'=> $adviceContent,
                'advicetitle'=>$adviceTitle,
                'advicetype'=>$adviceplace,
                'createdAt'=>$time,
                'publisherId'=>$userId,
                'publishername'=>$username,
            );
            $this->Advice_model->addadvice($data);
            echo "success";
        }


    }



    public function reply(){
        $this->load->model("Advice_model");
        $replycontent =$this->input->post('adviceContent');
        $adviceId =$this->input->post('adviceId');
        $time=date("Y-m-d H:i:s");
        $userId =$_SESSION['userId'];
        $username =$_SESSION['username'];
        $data =array(
            'replycontent'=> $replycontent,
            'adviceId'=>$adviceId,
            'createdAt'=>$time,
            'userId'=>$userId,
            'username'=>$username,
        );
        $this->Advice_model->addreply($data);
        echo "success";
    }


    public function analysisdata($filename){
        $xml = "";
        $f = fopen( $filename, 'r' );
        while( $data = fread($f, 4096)) {
            $xml .= $data;
        }
        fclose($f);
        preg_match_all( "/\<advice\>(.*?)\<\/advice\>/s",$xml,$adviceblock);
        foreach($adviceblock as $item) {
            preg_match_all("/\<content\>(.*?)\<\/content\>/", $item, $content);
            preg_match_all("/\<createdAt\>(.*?)\<\/createdAt\>/", $item, $createdAt);
            preg_match_all("/\<advicetitle\>(.*?)\<\/advicetitle\>/", $item, $advicetitle);
            preg_match_all("/\<advicetitle\>(.*?)\<\/advicetitle\>/", $item, $advicetitle);
        }
    }
}