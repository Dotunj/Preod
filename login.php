<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <title>Preod - Authentication System</title>
    <meta name="description" content="">

    <!-- Typekit Fonts -->
    <script src="//use.typekit.net/udt8boc.js"></script>
    <script>try{Typekit.load();}catch(e){}</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Preod</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="signup.html">Sign up</a></li>
      <li><a href="login.html">Login</a></li>
       <li><a href="users.php">Users</a></li>
    </ul>
  </div>
</nav>

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

   header("location: dashboard.php");

  }  else {
    	$error = '<div class="alert alert-success" role="alert">Invalid username or password</div>';

    	echo $error;
    }

?>

</body>
</html>






