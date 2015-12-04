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
        $hotadvice =$this->Advice_model->gethotadvice(0);
        $lasthelpadvice =$this->Advice_model->getlatesthelp();
        $lastcoachadvice =$this->Advice_model->getlatestcoach();
        $lastdoctoradvice =$this->Advice_model->getlatestdoctor();
        $this->load->view("advice/index",array('hotadvice'=>$hotadvice,'lasthelpadvice'=>$lasthelpadvice,'lastcoachadvice'=>$lastcoachadvice,'lastdoctoradvice'=>$lastdoctoradvice));
    }

    public function forHelp(){
        $this->load->model("Advice_model");
        $helpadvice =$this->Advice_model->gethelpadvice(0);
        $this->load->view("advice/forHelp",array('advice'=>$helpadvice));
    }

    public function doctor(){
        $this->load->model("Advice_model");
        $doctoradvice =$this->Advice_model->getdoctoradvice(0);
        $this->load->view("advice/doctor",array('advice'=>$doctoradvice));
    }

    public function coach(){
        $this->load->model("Advice_model");
        $helpadvice =$this->Advice_model->getcoachadvice(0);
        $this->load->view("advice/coach",array('advice'=>$helpadvice));
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

}