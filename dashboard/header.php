<?php
  session_start();

  if(!isset($_SESSION['authenticate'])){
     header('Location:../index.php');
  }

  if(isset($_POST['logout'])){
      session_destroy();
      session_unset();
      header('Location:../index.php');
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-extensions.css">
    <link rel="stylesheet" href="../css/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>Islam</title>
    <style>
        .sidebar .nav-link{
            color: #000;
        }
        .sidebar .nav-link:hover{
            color: #fff;
        }
    </style>
  </head>
  <body>
    <header>
      
    </header>