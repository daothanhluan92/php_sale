<?php
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$remember = $_POST['remember'];
	include 'connect.php';
	$take_info = "select * from user where email='$email' and password='$password'";
	$sql = mysqli_query($log_sql,$take_info);
	$result = mysqli_fetch_array($sql);
	if (mysqli_num_rows($sql) == 1) {
		$_SESSION['name'] = $result['name'];
		$_SESSION['password'] = $result['password'];
		$_SESSION['id'] = $result['id'];
		$_SESSION['phone'] = $result['phone'];
		$_SESSION['email'] = $result['email'];
		$_SESSION['address'] = $result['address'];
		if (isset($remember)) {
			$token = uniqid('user',true);
			setcookie($_SESSION['name'],$token,time() + (86400 * 30), "/");
		}else{
			setcookie($_SESSION['name'], "", time()-3600);
		}
		header('location:home.php');
		mysqli_close($log_sql);
		exit();
	}
	else {
		header('location:login.php?error=Login failed');
		mysqli_close($log_sql);
		exit();
	}
