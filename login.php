<?php 

require('connection.php');

session_start();

if($_SERVER["REQUEST_METHOD"] =="POST" ){
 
  $username = mysqli_real_escape_string($db_name, $_POST['username']);
  $password = mysqli_real_escape_string($db_name, $_POST['password']);

  $query = "SELECT id FROM users where username = '$username' and password = '$password'"

  $result = mysqli_query($db_name, $query);

  $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

  $active = $row['active'];

  $count = mysqli_num_rows($result);

  if($count == 1){
    session_register("username");

    $_SESSION['login_user'] = $username;

    header("location: dashboard.php");

    else {
    	$error = '<div class="alert alert-success" role="alert">Invalid username or password</div>'
    }

  }


}






