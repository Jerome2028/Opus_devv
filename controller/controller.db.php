<?php

date_default_timezone_set("Asia/Manila");
date_default_timezone_get();

class db_conn_mysql {
  private $servername;
  private $username;
  private $password;
  private $dbname;
  
  protected function db_conn() {
    $this->servername = "localhost";
    $this->username = "root";
    $this->password = "";
    $this->dbname = "opus";

    try {

      $conn = new PDO("mysql:host=$this->servername; dbname=$this->dbname", $this->username, $this->password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully"; 
    }
    catch(PDOException $e)
    {
      // echo "Connection failed: " . $e->getMessage();
    }

    return $conn;
  }
}
?>