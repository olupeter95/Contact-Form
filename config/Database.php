<?php

class Database
{
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $dbname = 'cms';

    public function getConnection()
    {
        $conn = new mysqli($this->host, $this->user, $this->password, $this->dbname);
        if($conn->connect_error){
            die("Failed to connect to Daatabe:"  .$conn->connect_error);
        } else {
            return $conn;
        }
    }
}