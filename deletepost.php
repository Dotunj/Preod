<?php
include('userconnection.php');
?>
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
    <li><a href="create_post.php">Create Post</a></li>
    <li><a href="viewpost.php?id=<?php echo $row['id']; ?>">View all Posts</a></li>
    <li><a href="logout.php"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
  </div>
</nav>


<?php 
require("connection.php");
 
$id = $_GET['id'];

$query = "DELETE FROM posts WHERE id = $id";

if(mysqli_query($connect, $query)) {
   $result = '<div class="alert alert-success" role="alert">Post deleted Successfully</div>';

   echo $result;


} else {
  echo "Error :" .$query . "</br>" .mysqli_error($connect);
}
?>
</body>
</html>