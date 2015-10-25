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
}