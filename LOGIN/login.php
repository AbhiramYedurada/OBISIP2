<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pwd = md5($_POST['pwd']);
    $cpwd = md5($_POST['cpwd']);
    $mobile = $_POST['mobile'];
 
   $select = " SELECT * FROM details WHERE email = '$email' && pwd = '$pwd' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['email'] == ''){
         
         $_SESSION['email'] = $row['email'];
         header('location:none');

      }else{

         $_SESSION['user_name'] = $row['first_name'];
         header('location:user.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>