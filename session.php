<?php

session_start();

 $username =  $_SESSION['login_user'];



 if(!isset($username))
 {
 	header('location: index.html');
 }

?>