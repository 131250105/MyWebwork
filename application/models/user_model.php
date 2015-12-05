<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/3
 * Time: 上午10:53
 */
include_once("bean/userbean.php");
class User_model extends CI_Model
{
    public function getUserByUserId($userId){
        $res = $this->db->from('user')
            ->where('userId',$userId)
            ->get();
        $userinfo =new userbean();
        foreach($res->result() as $item){
            $userinfo->setUserId($item->userId);
            $userinfo->setusername($item->username);
            $userinfo->setEmail($item->email);
            $userinfo->setUsertype($item->usertype);
            $userinfo->setProvince($item->province);
            $userinfo->setCity($item->city);
            $userinfo->setBirthyear($item->birthyear);
            $userinfo->setBirthmonth($item->birthmonth);
            $userinfo->setBirthday($item->birthday);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setSex($item->sex);
            $userinfo->setHobby($item->hobby);
            $userinfo->setDeclaration($item->declaration);
            $userinfo->setCreatedAt($item->createdAt);
            $userinfo->setState($item->state);
        }
        return $userinfo;
    }

    public function getuserbyemail($email){
        $res = $this->db->from('user')
            ->where('email',$email)
            ->get();
        $userinfo =new userbean();
        foreach($res->result() as $item){
            $userinfo->setUserId($item->userId);
            $userinfo->setusername($item->username);
            $userinfo->setEmail($item->email);
            $userinfo->setUsertype($item->usertype);
            $userinfo->setProvince($item->province);
            $userinfo->setCity($item->city);
            $userinfo->setBirthyear($item->birthyear);
            $userinfo->setBirthmonth($item->birthmonth);
            $userinfo->setBirthday($item->birthday);
            $userinfo->setIsbanned($item->isbanned);
            $userinfo->setIsonline($item->isonline);
            $userinfo->setPhoto($item->photo);
            $userinfo->setSex($item->sex);
            $userinfo->setHobby($item->hobby);
            $userinfo->setDeclaration($item->declaration);
        }
        return $userinfo;
    }

    public function update($userid,$data){
        $this->db->update('user',$data,array('userId'=>$userid));
    }

    public function login($email ,$password,$usertype){
        $res = $this->db->from('user')
            ->where('email',$email)
            ->where('usertype',$usertype)
            ->get();
        foreach($res->result() as $item){
            if($item->password ==$password)
                return $item->userId;
        }
        return -1;
    }

    public function insertuser($email ,$password ,$username ,$usertype
    ,$usersex,$userphoto,$createdAt){
        $data =array(
            'email' =>$email,
            'password' =>$password,
            'usertype' =>$usertype,
            'username' =>$username,
            'sex' =>$usersex,
            'photo' =>$userphoto,
            'createdAt' =>$createdAt,
            'state'=>0,
        );
        return $this->db->insert("user",$data);
    }

    /*
     * 省市相关
     */
    public function getprovince(){
        $res = $this->db->select('sName')
            ->from('tcity')
            ->where('sBelongCode',"0")
            ->get();
        $result =array();
        foreach($res->result() as $item){
            Array_push($result,$item->sName);
        }
        return $result;
    }


    public function getprovinceidbyname($provincename){
        $res = $this->db->select('iCityId')
            ->from('tcity')
            ->where('sName',$provincename)
            ->where('sBelongCode',0)
            ->get();
        foreach($res->result() as $item){
            $result=$item->iCityId;
        }
        return $result;
    }


    public function getcitybyprovince($provinceid){
        $res = $this->db->select('sName')
            ->from('tcity')
            ->where('sBelongCode',$provinceid)
            ->get();
        $result =array();
        foreach($res->result() as $item){
            Array_push($result,$item->sName);
        }
        return $result;
    }

    public function addfriend($data){
        $this->db->insert("friendship",$data);
    }

    public function updatefriend($firstuser,$seconduser,$data){
        $this->db->where('firstuserid',$firstuser)
             ->where('seconduserid',$seconduser)
             ->update('friendship',$data)
             ->set();
    }

    public function deletefriend($firstuser,$seconduser){

    }



    public function getpotentialfriends($userId){
        $res = $this->db
            ->from('user')
            ->where('usertype !=','admin')
            ->where('userId !=',$userId)
            ->limit(0,3)
            ->get();
        return $res->result();
    }


    public function judgefriends($userId,$thisuserId){
        $res1 = $this->db
            ->from('friendship')
            ->where('firstuserid',$userId)
            ->where('seconduserid',$thisuserId)
            ->get();

        $res2 = $this->db
            ->from('friendship')
            ->where('firstuserid',$thisuserId)
            ->where('seconduserid',$userId)
            ->get();

        if(count($res1->result())!=0){
            return 1;
        }

        if(count($res2->result())!=0){
            return 1;
        }
        return 0;
    }


    public function deletefriends($firstuserId,$seconduserId){
        $this->db
            ->from('friendship')
            ->where('firstuserid',$firstuserId)
            ->where('seconduserid',$seconduserId)
            ->delete();
        $this->db
            ->from('friendship')
            ->where('firstuserid',$seconduserId)
            ->where('seconduserid',$firstuserId)
            ->delete();
    }

    public function getleftfriends($userId){
        $res=$this->db
            ->from('friendship')
            ->join('user','user.userId=friendship.seconduserid')
            ->where('firstuserid',$userId)
            ->get();
        return $res->result();
    }

    public function getrightfriends($userId){
        $res=$this->db
            ->from('friendship')
            ->join('user','user.userId=friendship.firstuserid')
            ->where('seconduserid',$userId)
            ->get();
        return $res->result();
    }


    public function addgroup($data){
        return $this->db->insert("circle",$data);
    }

    public function removegroup($groupId){
        $this->db
            ->from("circle")
            ->where('groupId',$groupId)
            ->delete();
    }

    public function addgrouppartin($data){
        return $this->db->insert("grouppartin",$data);
    }

    public function deletegrouppartin($groupId,$userId){
        $this->db
            ->from("grouppartin")
            ->where('partinuserId',$userId)
            ->where('partingroupId',$groupId)
            ->delete();
    }

    public function getpublishcircle($userId){
        $res=$this->db
            ->from('circle')
            ->where('createrId',$userId)
            ->get();
        return $res->result();
    }

    public function gethotcircle(){
        $res=$this->db
            ->from('circle')
            ->limit('0,5')
            ->get();
        return $res->result();
    }


    public function getdetailcircle($circleId){
        $res=$this->db
            ->from('circle')
            ->where('groupId',$circleId)
            ->get();
        return $res->result();
    }


    public function getpartinmem($circleId){
        $res=$this->db
            ->from('grouppartin')
            ->join('user','grouppartin.partinuserId =user.userId')
            ->where('partingroupId',$circleId)
            ->get();
        return $res->result();
    }


    public function judgejoin($circleId,$userId){
        $res=$this->db
            ->from('grouppartin')
            ->where('partingroupId',$circleId)
            ->where('partinuserId',$userId)
            ->get();
        return $res->result();
    }

    public function getjoingroup($userId){
        $res=$this->db
            ->from('grouppartin')
            ->join('circle','grouppartin.partingroupId =circle.groupId')
            ->where('partinuserId',$userId)
            ->get();
        return $res->result();
    }


    public function gethotuser(){
        $res=$this->db
            ->from('user')
            ->order_by('userId','desc')
            ->limit(5)
            ->get();
        return $res->result();
    }
}