<?php 

$servername = "localhost";
$username = "root";
$password = "";
$db_name ="preod";

//Establish database connection 

 $connect = mysqli_connect($servername, $username, $password, $db_name);
 if(!$connect){
 	die("Connection failed: " .mysqli_connect_error());
} else {
	echo "Connected to Database successfully";
}
  $string = getdate();
   
?>

