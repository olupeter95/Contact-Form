<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'cms';
    private $port = 4000;

    public function getConnection()
    {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->dbname, $this->port);
        if($conn->connect_error){
            die("Failed to connect to Daatabe:"  .$conn->connect_error);
        }else{
            return $conn;
        }
    }
}