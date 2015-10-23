<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if(empty($_COOKIE['email'])||empty($_COOKIE['password'])){

		}
		else{
			$email = $_COOKIE['email'];
			$password =$_COOKIE['password'];
			$this->load->model("User_model");
			$userinfo =$this->User_model->getuserbyemail($email);
			if($userinfo->getpassword() ==$password)
			{
				session_start();
				$_SESSION['userId'] =$userinfo->getUserId();
				$_SESSION['userphoto'] =$userinfo->getPhoto();
			}
		}
		$this->load->view('welcome/index');
	}
}
