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
        $this->load->view("advice/index");
    }

    public function forHelp(){
        $this->load->view("advice/forHelp");
    }

    public function doctor(){
        $this->load->view("advice/doctor");
    }

    public function coach(){
        $this->load->view("advice/coach");
    }
}