<?php 
	$id = $_GET['id'];
	include '../connect.php';
	$sql = "delete from products where id='$id'";
	mysqli_query($log_sql,$sql);
	mysqli_close($log_sql);
	header('location:../home.php');