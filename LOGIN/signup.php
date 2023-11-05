<?php

@include 'config.php';

if(isset($_POST['save'])){

   $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pwd = md5($_POST['pwd']);
   $cpwd = md5($_POST['cpwd']);
   $mobile = $_POST['mobile'];

   if(!empty($first_name) && !empty($email) && !empty($pwd) && !empty($cpwd) && !empty($mobile))
   {
   $select = " SELECT * FROM details WHERE email = '$email' && pwd = '$pwd' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';
      echo 'user already exist!';

   }else{

      if($pwd != $cpwd){
         $error[] = 'password not matched!';
         echo 'password not matched!';
      }else{
         $insert = "INSERT INTO details(first_name , email, pwd, mobile) VALUES('$first_name','$email','$pwd','$mobile')";
         mysqli_query($conn, $insert);
         header('location:login.html');
      }
   }
}
}

?>