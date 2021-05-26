<?php

class ConnectDb {

    private $host = 'localhost';
    private $user = 'root';
    private $psw = '';
    private $db = 'webshop_fashion';

    protected function connection()
    {
       $conn = new mysqli($this->host, $this->user, $this->psw, $this->db);

       return $conn;
    }
}
