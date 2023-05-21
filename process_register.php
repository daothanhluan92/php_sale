<?php 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$birthdate = $_POST['birthdate'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$password = $_POST['password'];

	include 'connect.php';
	$insert = "insert into user(name,email,birthdate,phone,address,password) values('$name','$email','$birthdate','$phone','$address','$password')";
	$join = mysqli_query($log_sql,$insert);
	mysqli_close($log_sql);