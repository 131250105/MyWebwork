<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午18:54
 */
class activity extends CI_Controller
{
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
}