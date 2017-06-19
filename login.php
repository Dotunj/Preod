<?php 
session_start();

require('connection.php');


 
  $username = mysqli_real_escape_string($connect, $_POST['username']);
  $password = mysqli_real_escape_string($connect, $_POST['password']);

  $query = "SELECT * FROM `users` where username = '$username' and password = '" . md5($password). " ' ";

  $result = mysqli_query($connect, $query);

  $count = mysqli_num_rows($result);

  if($count==1){

   $_SESSION['login_user'] = $username;

   echo $_SESSION['login_user']; 
   //header("location: dashboard.php");

  }  else {
    	$error = '<div class="alert alert-success" role="alert">Invalid username or password</div>';

    	echo $error;
    }





?>






