<?php
/**
 * Created by PhpStorm.
 * User: asus
 * Date: 2015/11/1
 * Time: 14:30
 */
class detail extends CI_Controller
{
    public function activity(){
        $this->load->view("detail/activity");
    }

    public function advice(){
        $this->load->view("detail/advice");
    }

}