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
}