<?php
include("db.php"); 
$username = $_GET['username'];
$password = $_GET['password'];
if(isset($username) && isset($password)){ 
	user_login($username,$password); 
} 
?>