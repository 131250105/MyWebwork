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
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nickname = $this->input->post('nickname');
        $usertype = $this->input->post('usertype');
        $userId =$this->User_model->insertuser($username,$password,
            $nickname,$usertype);
        if($userId != -1){
            session_start();
            $_SESSION['userId']=$userId;
        }else{
            echo "注册失败，用户名已存在";
        }
    }


    public function login(){
        $this->load->model("User_model");
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $userId =$this->User_model->login($username ,$password);
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
        $this->load->view("user/index", array('user' => $userinfo));
    }

    /*
     * 主页相关结束
     */
}