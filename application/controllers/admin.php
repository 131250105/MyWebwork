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
        $this->load->model("Admin_model");
        $userlist =$this->Admin_model->getalluser();
        $this->load->view("admin/index",array("mydata"=>$userlist));
    }

    public function ban(){
        $this->load->model("Admin_model");
        $userId = $this->input->post('userId');
        $data=array('state'=>1);
        $this->Admin_model->changeuserstate($userId,$data);
        echo "success";
    }


    public function cancelban(){
        $this->load->model("Admin_model");
        $userId = $this->input->post('userId');
        $data=array('state'=>0);
        $this->Admin_model->changeuserstate($userId,$data);
        echo "success";
    }
}
