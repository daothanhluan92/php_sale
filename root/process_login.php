<?php
	if(!empty($_POST['email']) and !empty($_POST['password'])){
		$email = $_POST['email'];
		$password = $_POST['password'];
		include '../connect.php';
		$sql = "select * from admin where email='$email' and password='$password'";
		$join = mysqli_query($log_sql,$sql);
		if(mysqli_num_rows($join) ==1){
			mysqli_close($log_sql);
			header('location:home_root.php');	
		}
		else{
			header('location:login.php?error=Failed login');
		}
	}
	else{
		header('location:login.php?error=Failed login');
	}