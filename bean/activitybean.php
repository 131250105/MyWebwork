<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/11/30
 * Time: 下午15:44
 */
class Activitybean
{

    private $ActivityId;
    private $ActivityName;
    private $ActivityIntro;
    private $Activitystarttime;
    private $ActivityEndtime;
    private $Activitylocation;
    private $Activitybeizhu;

    /**
     * @return mixed
     */
    public function getActivitybeizhu()
    {
        return $this->Activitybeizhu;
    }

    /**
     * @param mixed $Activitybeizhu
     */
    public function setActivitybeizhu($Activitybeizhu)
    {
        $this->Activitybeizhu = $Activitybeizhu;
    }

    /**
     * @return mixed
     */
    public function getActivityEndtime()
    {
        return $this->ActivityEndtime;
    }

    /**
     * @param mixed $ActivityEndtime
     */
    public function setActivityEndtime($ActivityEndtime)
    {
        $this->ActivityEndtime = $ActivityEndtime;
    }

    /**
     * @return mixed
     */
    public function getActivityId()
    {
        return $this->ActivityId;
    }

    /**
     * @param mixed $ActivityId
     */
    public function setActivityId($ActivityId)
    {
        $this->ActivityId = $ActivityId;
    }

    /**
     * @return mixed
     */
    public function getActivityIntro()
    {
        return $this->ActivityIntro;
    }

    /**
     * @param mixed $ActivityIntro
     */
    public function setActivityIntro($ActivityIntro)
    {
        $this->ActivityIntro = $ActivityIntro;
    }

    /**
     * @return mixed
     */
    public function getActivitylocation()
    {
        return $this->Activitylocation;
    }

    /**
     * @param mixed $Activitylocation
     */
    public function setActivitylocation($Activitylocation)
    {
        $this->Activitylocation = $Activitylocation;
    }

    /**
     * @return mixed
     */
    public function getActivityName()
    {
        return $this->ActivityName;
    }

    /**
     * @param mixed $ActivityName
     */
    public function setActivityName($ActivityName)
    {
        $this->ActivityName = $ActivityName;
    }

    /**
     * @return mixed
     */
    public function getActivitystarttime()
    {
        return $this->Activitystarttime;
    }

    /**
     * @param mixed $Activitystarttime
     */
    public function setActivitystarttime($Activitystarttime)
    {
        $this->Activitystarttime = $Activitystarttime;
    }

}