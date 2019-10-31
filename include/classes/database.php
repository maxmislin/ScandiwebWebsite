<?php

class Database{
  public $user;
  public $password;
  public $db;
  public $host;
  public $port;

  public function __construct(){
    $this->user = 'root';
    $this->password = 'root';
    $this->db = 'scandidb';
    $this->host = 'localhost';
    $this->port = 3307;
  }

  public function connect(){
    $link = mysqli_connect(
      "$this->host:$this->port",
      $this->user,
      $this->password,
      $this->db
    );
    if(mysqli_connect_errno()){
      echo 'Error to connect to database ('.mysqli_connect_errno().'): '.mysqli_connect_error();
      exit();
    }
    return $link;
  }
}
?>
