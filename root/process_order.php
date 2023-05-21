<?php
	session_start();
	include '../connect.php';
	if (!empty($_SESSION['id'])) {
		$id = $_SESSION['id'];
		foreach ($_SESSION['cart'] as $cart ) {
			$product_id = $cart['id'];
			$quantity = $cart['quantity'];
			$sql = "insert into order_product(user_id,product_id,quantity) values('$id','$product_id','$quantity')";
			mysqli_query($log_sql,$sql);
			#mysqli_close($log_sql);
		}
	}
	else{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$address = $_POST['address'];
		foreach ($_SESSION['cart'] as $cart ){
			$product_id = $cart['id'];
			$quantity = $cart['quantity'];
			$sql = "insert into order_product(name,email,phone,address,quantity,product_id) values('$name','$email','$phone','$address','$quantity','$product_id')";
			mysqli_query($log_sql,$sql);
			#mysqli_close($log_sql);
			}
		}
?>