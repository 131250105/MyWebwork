<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/1
 * Time: 下午21:51
 */
class user extends CI_Controller
{
//    配置自动加载db
//    comfig/autoload.php
//    $autoload['libraries']=array('database');
//    $this->load->database();
    public function test(){
//        $sql ='select * from user';
//        $result = $this->db->query($sql);
//        $users =$result->result();
//        $data =array('userlists'=>$users);
//        $this->load->view("user/test",$data);
//
//        $res=$this->db->get('user');
//        foreach($res->result() as $item){
//            echo $item->username;
//        }
        $this->load->view("user/login");
    }

    public function register(){
        $data =array(
            'username'=> 'aaa78912',
            'password'=>'123456',
            'usertype'=>'doctor',
        );
        $this->db->insert("user",$data);
    }

    public function login(){
        $this->load->model("User_model");
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($this->User_model->login($username ,$password)) {
            $this->load->view("user/login", array('username' => $username));
        }
        else
            $this->load->view("user/test");
    }
}