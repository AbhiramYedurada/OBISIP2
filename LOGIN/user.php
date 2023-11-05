<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <style>
      body{
       
       background-image: url("bg2.jpeg");
       background-repeat: no-repeat;
       background-attachment: fixed;
       background-position: center;
       background-size: cover;
   }
   section .left_content{
			width: 41%;
			height: 100%;
			float: left;
			padding: 50px;
			box-sizing: border-box;
		}
      section .right_content{
			width: 59%;
			height: 100%;
			float: right;
			padding: 50px;
			box-sizing: border-box;
		}
   section .right_content a{
                 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                 font-size: 20pt;
                 color: red;
            }
   </style>

</head>
<body>
<section>
   <div class="left_content">
      <h1>Hi, <span>User</span></h1>
      <br>
      <h1>Welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
   </div>
   <div class="right_content>
   <table border="2" align="right">
				<td> <a href="logout.php" target="content area">Logout</a></td>
   </table>
   </div>
</section>
</body>
</html>