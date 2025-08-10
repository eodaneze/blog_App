<?php 

  $hostName = 'localhost';
  $userName = 'root';
  $password = '';
  $dbName = 'blog_app';


  $conn = mysqli_connect($hostName, $userName, $password, $dbName);

  if(!$conn){
     echo "Failed to connect to db";
  }
?>