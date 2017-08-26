<?php include('userconnection.php');
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
      <a class="navbar-brand" href="dashboard.php">Preod</a>
    </div>
    <ul class="nav navbar-nav">
    <li><a href="create_post.php">Create Post</a></li>
    <li><a href="viewpost.php?id=<?php echo $row['id']; ?>">View all Posts</a></li>
    <li><a href="logout.php"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
  </div>
</nav>

<div class="container">
<table class="table table-bordered">
<thead>
<tr>
 <th> Title </th>
 <th> Content </th>
 <th colspan="3">Operations</th>
 </tr>
 </thead>
 <tbody>
<?php

require("connection.php");

$user_id = $_GET['id'];

$query = "SELECT * FROM posts WHERE user_id = '$user_id' ";

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo "<td>".$row["title"]. "</td>";
    echo "<td>".$row["content"]. "</td>";
    echo '<td><a class="btn btn-primary" href="readpost.php?id='.$row['id'].'">Read</a></td>';
    echo '<td><a class="btn btn-success" href="update_post.php?id='.$row['id'].'">Update</a></td>';
    echo '<td><a class="btn btn-danger" href="deletepost.php?id='.$row['id'].'">Delete</a></td>';
    echo '</tr>';
    }
} else {
    echo "No posts yet";
}
?>
 </tbody>
 </table>
 </div>
 </body>
 </html>
 