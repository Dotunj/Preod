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
      <a class="navbar-brand" href="">Preod</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="createpost.html">Create Post</a></li>
    <li><a href="viewpost.php">View all Posts</a></li>
    <li><a href="logout.php"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
  </div>
</nav>

<?php

include('session.php');
?>

  <div class="container">
       <div class="row">
        <h3> Welcome <?php echo "$username" ; ?> </h3>
</div>
</div>


</body>
</html>
