   <?php

   include("session.php");

   require("connection.php");

   $username = $_SESSION['login_user'];

   $query = "SELECT * FROM users WHERE username = '$username' ";

   $result = mysqli_query($connect, $query);

   $row = mysqli_fetch_assoc($result);
    ?>