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


require("connection.php");

$email = $_POST['email'];

$username = $_POST['username'];

$password = md5($_POST['password']);

$data = "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')";

if(mysqli_query($connect, $data)) {
   $result = '<div class="alert alert-success" role="alert">Account created Successfully</div>';

   echo $result;


} else {
	echo "Error :" .$data . "</br>" .mysqli_error($connect);
}



//mysqli_close($connect);
?>
</body>
</html>

