<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午18:54
 */
class topic extends CI_Controller
{
    public function userindex(){
        $this->load->view("topic/index");
    }

    public function publishtopic(){
        $this->load->model("Topic_model");
        $userId =$_SESSION['userId'];
        $context = $this->input->post('context');
        $time=date("Y-m-d H:i:s");
        $praisenum =0;
        $data =array(
            'publisherId' => $userId,
            'context'  => $context,
            'createdtime'=> $time,
            'praisenum' => $praisenum,
        );
        $this->Topic_model->add($data);
        return "success";
    }

    public function deletetopic(){

    }
}