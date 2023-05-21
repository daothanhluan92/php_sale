<?php 
	session_start();
	if(isset($_COOKIE[$_SESSION['name']])){
		header('location:login.php');
		exit();
	}
	session_unset();
	#setcookie($_SESSION['name'], "", time()-3600);	
	header('location:home.php');

