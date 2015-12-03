<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/12/2
 * Time: 22:38
 */

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->model("Admin_model");
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user =$this->Admin_model->getadminbyadminname($username);
        if(count($user)!=0) {
            foreach($user as $item){
                if($item->password == md5($password))
                    echo 'success';
                else
                    echo 'fail';
                break;
            }
        }
        else{
            echo 'fail';
        }
    }


    public function login()
    {
        $this->load->view("admin/login");
    }


    public function userlist(){
        $this->load->view("admin/index");
    }
}
