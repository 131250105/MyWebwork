<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/1
 * Time: 下午21:51
 */
include_once("bean/userbean.php");
class user extends CI_Controller
{
//    配置自动加载db
//    comfig/autoload.php
//    $autoload['libraries']=array('database');
//    $this->load->database();
//    已经配置
//    下面是测试用的一个例子
//    public function test(){
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
//          $this->load->view("user/login");
//    }


    /*
     * 正式代码开始
     */


    /*
     * 登陆注册相关开始
     */
    public function register(){
        $this->load->model("User_model");
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $username = $this->input->post('username');
        $usertype = $this->input->post('usertype');
        $usersex  = $this->input->post('usersex');
        $userphoto ="";
        if($usersex=="男"){
            $userphoto =base_url("images/user_defaultHead_male.jpg");
        }
        else{
            $userphoto =base_url("images/user_defaultHead_female.jpg");
        }
        $lastid =$this->db->insert_id();
        $userId =$this->User_model->insertuser($email,$password,
            $username,$usertype,$usersex,$userphoto);
        if($lastid!=$this->db->insert_id()){
            session_start();
            $_SESSION['userId']=$this->db->insert_id();
            echo "success";
        }
        else{
            echo "fail";
        }

    }


    public function login(){
        $this->load->model("User_model");
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $remember =$this->input->post('remember');
        if($remember==true){
            setcookie("email",$email,time()+3600*24*365);
            setcookie("password",$password,time()+3600*24*365);
        }
        $userId =$this->User_model->login($email ,$password);
        if($userId != -1) {
            session_start();
            $_SESSION['userId']=$userId;
            echo "success";
        }
        else
            echo "wrong";
    }


    public function logout(){
        session_start();
        unset($_SESSION['views']);
        $this->load->view("welcome/index");
    }

    /*
     * 登陆注册相关结束
     */

    /*
     * 主页相关开始
     */
    public function index(){
        $this->load->model("User_model");
        session_start();
        $userId =$_SESSION['userId'];
        $userinfo =$this->User_model->getUserByUserId($userId);
        $_SESSION['userphoto']=$userinfo->getPhoto();
        $this->load->view("user/index", array('user' => $userinfo));
    }

    /*
     * 主页相关结束
     */
}