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
    <li><a href="viewpost.html">View all Posts</a></li>
    <li><a href="logout.php"><button class="btn btn-danger">Logout</button></a></li>
    </ul>
  </div>
</nav>

<div class="container">
<table class="table table-bordered">
<thead>
<tr>
 <th> S/N </th>
 <th> Title </th>
 <th> Content </th>
 <th></th>
 </tr>
 </thead>
 <tbody>
<?php

require("connection.php");

$query = "SELECT * FROM posts";

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo "<td>".$row["id"]. "</td>";
    echo "<td>".$row["title"]. "</td>";
    echo "<td>".$row["content"]. "</td>";
    echo '<td><a class="btn btn-primary" href="read.php?id='.$row['id'].'">Read</a></td>';
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
 