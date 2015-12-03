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
        $username = $this->input->post('email');
        $password = $this->input->post('loginpassword');
        $user =$this->Admin_model->getadminbyadminname($username);
        if(count($user)!=0) {
            foreach($user as $item){
                if($item->password == md5($password))
                    $this->load->view("admin/index");
                else
                    $this->load->view("admin/fail");
                break;
            }
        }
        else{
            $this->load->view("admin/fail");
        }
    }


    public function login()
    {
        $this->load->view("admin/login");
    }
}
