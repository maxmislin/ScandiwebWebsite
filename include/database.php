<?php

$user = 'root';
$password = 'root';
$db = 'scandidb';
$host = 'localhost';
$port = 3307;

$link = mysqli_connect(
   "$host:$port",
   $user,
   $password,
   $db
);

if(mysqli_connect_errno()){
  echo 'Error to connect to database ('.mysqli_connect_errno().'): '.mysqli_connect_error();
  exit();
}
?>
