<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 2015/9/17
 * Time: 上午10:12
 * 写的非常烂的数据库连接类
 */
class database
{
    // single instance of self shared among all instances
    private static $instance = null;


    // db connection config vars
    private $user = "root";
    private $pass = "";
    private $dbName = "webwork";
    private $dbHost = "localhost";
    private $con=null;

    private function __construct(){

    }

    public static function getInstance() {
        if (!self::$instance instanceof self) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function connect(){
        $this->con =new mysqli($this->dbHost,$this->user,$this->pass,$this->dbName);
        if (!$this->con)
        {
            die('Could not connect: ' . mysql_error());
        }
    }

    public function query($sql){
        return $this->con->query($sql);
    }

    public function close(){
        mysqli_close($this->con);
    }
}