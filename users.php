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
    <div class="container">
    	 <div class="row">
    	 	<h3> Users </h3>

        <?php

        require('connection.php');

        $query = "SELECT username FROM users";

        $result = mysqli_query($connect, $query);

        if(mysqli_num_rows($result) > 0){

          while($row = mysqli_fetch_assoc($result)) {

           echo "<li> " .$row["username"]. "</li>" ; 
          } 
        }else {
         echo "No User yet to register";
           }
          ?>

        </div>
      </div>
    </body>
    </html>