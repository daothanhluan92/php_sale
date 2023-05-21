<?php
	session_start();
	#unset($_SESSION['cart']);
	$id= $_GET['id'];

	if(empty($_SESSION['cart'][$id])){
		include 'connect.php';
		$sql = "select * from products where id='$id'";
		$join = mysqli_query($log_sql,$sql);
		$result = mysqli_fetch_array($join);
		$_SESSION['cart'][$id]['id'] = $result['id'];
		$_SESSION['cart'][$id]['name']	= $result['name'];
		$_SESSION['cart'][$id]['photo'] = $result['photo'];
		$_SESSION['cart'][$id]['price'] = $result['price'];
		$_SESSION['cart'][$id]['quantity'] = 1;
	}
	else{
		$_SESSION['cart'][$id]['quantity'] += 1;
	}
	header('location:home.php');
	#echo json_encode($_SESSION['cart']);	
?>
