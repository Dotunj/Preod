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
       <div class="row">
        <h3>Create Post</h3>
        <div class="col-lg-6">
    <form class="form-vertical" role="form" method="post" action="createpost.php?id=<?php echo $row['id']; ?>">
                  <div class="form-group">
                 <label for="username" class="control-label">Title</label>
                 <input type="text" name="title" class="form-control" id="username" required>
                </div>
                <div class="form-group">
                    <label for="password" class="control-label">Content</label>
                    <textarea class="form-control" name="content" rows="5" id="content" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="" class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
    </div>


</body>
</html>
