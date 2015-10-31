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
        $this->load->view("sport/index");
    }

    public function administration(){
        $this->load->view("sport/administration");
    }

    public function track(){
        $this->load->view("sport/track");
    }

    public function sleepAnalysis(){
        $this->load->view("sport/sleepAnalysis");
    }

    public function ride(){
        $this->load->view("sport/ride");
    }
}