<?php
	session_start();
	$id = $_GET['id'];
	$quantity = $_SESSION['cart'][$id]['quantity'];
	$cal = $_GET['cal'];
	if ($cal=='sub' and $quantity > 1 ){
		$_SESSION['cart'][$id]['quantity'] -=1;
		header('location:view_cart.php');
		exit();
	}elseif ($cal=='sub' and $quantity = 1 ) {
		unset($_SESSION['cart'][$id]);
		header('location:view_cart.php');
		exit();
	}else{
		$_SESSION['cart'][$id]['quantity'] +=1;
		header('location:view_cart.php');

	}
?>