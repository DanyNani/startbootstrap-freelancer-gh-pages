<?php
// app/models/Database.php

class Database
{
    private $host = 'dannynani.free.nf';
    private $db_name = 'midatabase';
    private $username = 'if0_37114550';
    private $password = 'DannyNani2001';
    private $conn;

    public function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo 'Connection Error: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
