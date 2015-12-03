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
        $createdAt =date("Y-m-d H:i:s");
        $userphoto ="";
        if($usersex=="男"){
            $userphoto =base_url("images/user_defaultHead_male.jpg");
        }
        else{
            $userphoto =base_url("images/user_defaultHead_female.jpg");
        }
        $lastid =$this->db->insert_id();
        $userId =$this->User_model->insertuser($email,$password,
            $username,$usertype,$usersex,$userphoto,$createdAt);
        if($lastid!=$this->db->insert_id()){
            $_SESSION['userId']=$this->db->insert_id();
            $userinfo =$this->User_model->getUserByUserId($this->db->insert_id());
            $_SESSION['userphoto']=$userinfo->getPhoto();
            $_SESSION['username']=$userinfo->getusername();
            $_SESSION['usersex']=$userinfo->getSex();
            $_SESSION['usertype']=$userinfo->getUsertype();
            if($userinfo->getProvince()==$userinfo->getCity()){
                $_SESSION['userlocation']=$userinfo->getProvince();
            }
            else {
                $_SESSION['userlocation'] = $userinfo->getProvince().$userinfo->getCity();
            }
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
        $usertype =$this->input->post('usertype');
        if($remember==true){
            setcookie("email",$email,time()+3600*24*365);
            setcookie("password",$password,time()+3600*24*365);
        }
        $userId =$this->User_model->login($email ,$password,$usertype);
        if($userId != -1) {
            $userinfo =$this->User_model->getUserByUserId($userId);
            if($userinfo->getState()!=0){
                echo "banned";
            }else {
                $_SESSION['userId'] = $userId;
                $_SESSION['userphoto'] = $userinfo->getPhoto();
                $_SESSION['username'] = $userinfo->getusername();
                $_SESSION['usersex'] = $userinfo->getSex();
                $_SESSION['usertype'] = $userinfo->getUsertype();
                if ($userinfo->getProvince() == $userinfo->getCity()) {
                    $_SESSION['userlocation'] = $userinfo->getProvince();
                } else {
                    $_SESSION['userlocation'] = $userinfo->getProvince() . $userinfo->getCity();
                }
                echo "success";
            }
        }
        else
            echo "wrong";
    }


    public function logout(){
        session_unset();
        redirect('', 'refresh');
    }

    /*
     * 登陆注册相关结束
     */

    /*
     * 主页相关开始
     */
    public function index(){
        $this->load->model("User_model");
        $userId =$_SESSION['userId'];
        $userinfo =$this->User_model->getUserByUserId($userId);
        $potentialfriends =$this->User_model->getpotentialfriends($userId);
        $this->load->view("user/index", array('user' => $userinfo,'pfriends'=>$potentialfriends));
    }

    /*
     * 主页相关结束
     */


    public function edit(){
        $this->load->model("User_model");
        $userId =$_SESSION['userId'];
        $userinfo =$this->User_model->getUserByUserId($userId);
        $this->load->view("user/edit",array('user'=>$userinfo));
    }

    public function friends(){
        $this->load->model("User_model");
        $userId =$_SESSION['userId'];
        $leftfriends =$this->User_model->getleftfriends($userId);
        $rightfriends =$this->User_model->getrightfriends($userId);
        $this->load->view("user/friends",array('leftfriends'=>$leftfriends,'rightfriends'=> $rightfriends));

    }

    public function otherUserView(){
        $this->load->model("User_model");
        parse_str($_SERVER['QUERY_STRING'], $_GET);
        $userId =$_GET['userId'];
        $thisuserId =$_SESSION['userId'];
        $userinfo =$this->User_model->getUserByUserId($userId);
        $judgefriends =$this->User_model->judgefriends($userId,$thisuserId);
        $this->load->view("user/otherUserView",array('user'=>$userinfo,'judgefriends'=>$judgefriends));
    }

    public function userManagement(){
        $this->load->model("User_model");
        $userId =$_SESSION['userId'];
        $userinfo =$this->User_model->getUserByUserId($userId);
        $this->load->view("user/userManagement",array('user'=>$userinfo));
    }


    public function submitedit(){
        $this->load->model("User_model");
        $username = $this->input->post('username');
        $usersex = $this->input->post('usersex');
        $birthyear = $this->input->post('birthyear');
        $birthmonth = $this->input->post('birthmonth');
        $birthday = $this->input->post('birthday');
        $province = $this->input->post('province');
        $city = $this->input->post('city');
        $hobby = $this->input->post('hobby');
        $declaration = $this->input->post('declaration');
        $data =array(
            'username' => $username,
            'sex'  => $usersex,
            'birthyear'=> $birthyear,
            'birthmonth' => $birthmonth,
            'birthday' => $birthday,
            'province' => $province,
            'city' => $city,
            'hobby' =>$hobby,
            'declaration' =>$declaration,
        );
        $userid =$_SESSION['userId'];
        $this->User_model->update($userid,$data);
        $_SESSION['username'] =$username;
        $_SESSION['usersex'] =$usersex;
        if($province==$city){
            $_SESSION['userlocation'] =$province;
        }else{
            $_SESSION['userlocation'] =$province.$city;
        }
    }

    /*
     * 省市相关
     */
    public function getprovince(){
        $this->load->model("User_model");
        $allprovince =$this->User_model->getprovince();
        $json=json_encode($allprovince);
        $result=preg_replace("#\\\u([0-9a-f]+)#ie", "iconv('UCS-2', 'UTF-8', pack('H4', '\\1'))", $json);
        echo $result;
    }

    public function getcity(){
        $this->load->model("User_model");
        $provincename = $this->input->post('province');
        $provinceid =$this->User_model->getprovinceidbyname($provincename);
        if(count($provinceid)!=null){
                        $city =$this->User_model->getcitybyprovince($provinceid);
                        $json=json_encode($city);
                        $result=preg_replace("#\\\u([0-9a-f]+)#ie", "iconv('UCS-2', 'UTF-8', pack('H4', '\\1'))", $json);
                        echo $result;
        }else{
            echo "fail";
        }
    }

    /*
     * friend相关, 0,1,2,3分别表示未接受，接受，删除，拒绝
     */
    public function addfriend(){
        $this->load->model("User_model");
        $firstuserId = $_SESSION['userId'];
        $seconduserId = $this->input->post('userId');;
        $state =0;
        $createtime=date("Y-m-d H:i:s");
        $data =array(
            'firstuserid' => $firstuserId,
            'seconduserid'  => $seconduserId,
            'state'=> $state,
            'createtime' => $createtime,
        );
        $this->User_model->addfriend($data);
    }

    public function deletefriend(){
        $this->load->model("User_model");
        $firstuserId = $_SESSION['userId'];
        $seconduserId = $this->input->post('userId');
        $this->User_model->deletefriends($firstuserId,$seconduserId);
    }

    public function acceptfriend(){
        $this->load->model("User_model");
        $firstuserId = $this->input->post('firstuserId');
        $seconduserId = $this->input->post('seconduserId');
        $state =1;
        $createtime=date("Y-m-d H:i:s");
        $data =array(
            'firstuserid' => $firstuserId,
            'seconduserid'  => $seconduserId,
            'state'=> $state,
            'createtime' => $createtime,
        );
        $this->User_model->updatefriend($firstuserId,$seconduserId,$data);
    }

    public function rejectfriend(){
        $this->load->model("User_model");
        $firstuserId = $this->input->post('firstuserId');
        $seconduserId = $this->input->post('seconduserId');
        $state =3;
        $createtime=date("Y-m-d H:i:s");
        $data =array(
            'firstuserid' => $firstuserId,
            'seconduserid'  => $seconduserId,
            'state'=> $state,
            'createtime' => $createtime,
        );
        $this->User_model->updatefriend($firstuserId,$seconduserId,$data);
    }
}
