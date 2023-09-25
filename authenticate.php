<?php
  
  require('db.php');

  function login(){
      $email = $_POST['email'];
      $password = $_POST['password'];

      $error = [];
      
      
      if(strlen($email) > 100){
          $error['email'] = 'আপনার ১০০ শব্দের বেশি ইমেইল এড্রেস দিতে পারবেন না';
      }
      if(strlen($password) > 30){
          $error['password'] = 'আপনে ৩০ শব্দের বেশি পাসওয়ার্ড দিতে পারবেন না';
      }
     
      
      $connection = db_connection();
      

      $login_query = "SELECT * FROM registration WHERE email='$email' and password='$password'";
      
      $result = mysqli_query($connection, $login_query);
      
      if(mysqli_error($connection)){
          die('Table Error: '.mysqli_error($connection));
      }
      if(strlen($email) == 0){
          $error['email'] = 'আপনার ইমেইল এড্রেস দিন';
      }else if(strlen($password) == 0){
          $error['password'] = 'আপনার পছন্দমতো একটি পাসওয়ার্ড দিন';
      }else{
          if(mysqli_num_rows($result) == 0){
              $error['match'] = 'আপনার ইমেইল/পাসওয়ার্ড মিল নেই';
          }
      }
      
      
       if(count($error) > 0){
        return[
            'status' => 'error',
            'message' => $error
        ]; 
      }
      
      $_SESSION['authenticate'] = mysqli_fetch_assoc($result);
      
      header('Location:dashboard/introduction.php');
      
     
     
  } 

  function registration(){
      $name = $_POST['name'];
      $phone_no = $_POST['phone_no'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $confirm_password = $_POST['confirm_password'];
      
      $error = [];
      
      if(strlen($name) == 0){
          $error['name'] = 'আপনার নাম প্রবেশ করুন';
      }
       if(strlen($name) > 100){
          $error['name'] = 'আপনার নাম ১০০ শব্দের বেশি হওয়া যাবে না';
      }
      if(strlen($phone_no) == 0){
          $error['phone_no'] = 'আপনার ফোন নাম্বার দিন';
      }
       if(strlen($phone_no) > 30){
          $error['phone_no'] = 'আপনার ফোন নাম্বারের ডিজিট ৩০ এর বেশি হওয়া যাবে না';
      }
      if(strlen($address) == 0){
          $error['address'] = 'আপনার ঠিকানা লিখুন';
      }
       if(strlen($address) > 300){
          $error['address'] = 'আপনার ঠিকানা ৩০০ শব্দের বেশি হওয়া যাবে না';
      }
      if(strlen($email) == 0){
          $error['email'] = 'আপনার ইমেইল এড্রেস দিন';
      }
      if(strlen($email) > 100){
          $error['email'] = 'আপনার ১০০ শব্দের বেশি ইমেইল এড্রেস দিতে পারবেন না';
      }
      if(strlen($password) == 0){
          $error['password'] = 'আপনার পছন্দমতো একটি পাসওয়ার্ড দিন';
      }
      if(strlen($password) > 30){
          $error['password'] = 'আপনে ৩০ শব্দের বেশি পাসওয়ার্ড দিতে পারবেন না';
      }
      if(strlen($confirm_password) == 0){
          $error['confirm_password'] = 'পাসওয়ার্ড নিশ্চিত করুন';
      }
       if($confirm_password != $password){
          $error['confirm_password'] = 'আপনার প্রদত্ত পাসওয়ার্ডটি সঠিক নয়';
      }
      
      if(count($error) > 0){
        return[
            'status' => 'error',
            'message' => $error
        ]; 
      }
      
      $success = [];
      $connection = db_connection();
      
      $Registartion_query = "INSERT INTO registration(name,phone_no,address,email,password) VALUES ('$name','$phone_no','$address','$email','$password')";
      
      $result = mysqli_query($connection, $Registartion_query);
      
      if(mysqli_error($connection)){
          die('Table Error: '.mysqli_error($connection));
      }
      
      $view_registration_query = "SELECT * FROM registration WHERE email='$email'";
      
      $result2 = mysqli_query($connection, $view_registration_query);
      
      if(mysqli_error($connection)){
          die('Table Error: '.mysqli_error($connection));
      }
      
      $_SESSION['authenticate'] = mysqli_fetch_assoc($result2);
      
      print_r($_SESSION['authenticate']);
      
      $success['success'] = 'আপনার রেজিষ্ট্রেশন সম্পন্ন হয়েছে';
      
      return[
          'status' => 'success',
          'message' => $success['success']
      ];
  } 
      
?>