<?php
  
  function db_connection(){
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'islam';
      
    $connection = mysqli_connect($host,$user,$password,$database);
      
    if(!$connection){
        die('Database error: '.mysqli_connect_error($connection));
    }
      
    return $connection;
  }

?>