<?php

class dbConnect{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "todo_app";
    public $pdo;
    function  connect(){

        $this->pdo = null;

        try {
            $this->pdo = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbName, $this->user, $this->password);
            
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo 'Connection failure:' . $e->getMessage();
        }

        return $this->pdo;
    }
}