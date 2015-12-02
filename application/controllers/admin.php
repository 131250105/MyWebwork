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
        $this->load->view("admin/index");
    }

    public function login()
    {
        $this->load->view("admin/login");
    }

}
