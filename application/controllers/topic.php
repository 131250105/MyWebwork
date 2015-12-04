<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/10/25
 * Time: 下午18:54
 */
class topic extends CI_Controller
{
    public function userindex(){
        $this->load->view("topic/index");
    }

    public function publishtopic(){
        $this->load->model("Topic_model");
        $userId =$_SESSION['userId'];
        $username =$_SESSION['username'];
        $context = $this->input->post('context');
        $time=date("Y-m-d H:i:s");
        $praisenum =0;
        $data =array(
            'publisherId' => $userId,
            'context'  => $context,
            'createdtime'=> $time,
            'praisenum' => $praisenum,
            'username'=>$username,
        );
        $this->Topic_model->add($data);
        return "success";
    }

    public function praise(){
        $this->load->model("Topic_model");
        $topicId = $this->input->post('topicId');
        $praise=$this->Topic_model->gettopicbyId($topicId);
        $num=0;
        foreach($praise as $item){
            $num=$item->praisenum;
        }
        $num=$num+1;
        $data=array(
            'praisenum'=>$num
        );
        $this->Topic_model->update($data,$topicId);
        echo "success";
    }
}