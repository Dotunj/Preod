<?php 

if(isset($_POST['submit']))
{
require("connection.php");

$email = $POST['email'];

$username = $POST['username'];

$password = bycrypt($POST['password']);

$data = "INSERT INTO users(email, username, password) VALUES('$email', '$username', '$password')";

if(mysqli_query($connect, $data)) {

	echo "New record created successfully";
} else {
	echo "Error :" .$data . "</br>" .mysqli_error($connect);
}

}
//mysqli_close($connect);

?>