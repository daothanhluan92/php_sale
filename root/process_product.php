<?php
	if(!empty($_POST['name']) || !empty($_FILES['photo']) || !empty($_POST['manufacturer']) || !empty($_POST['price'])) {
		$name = $_POST['name'];
		$manufacturer = $_POST['manufacturer'];
		$price = $_POST['price'];
		$temp = explode(".", $_FILES["photo"]["name"]);
		$newfilename = round(microtime(true)) . '.' . end($temp);
		$path_file = "./photo/" . $newfilename;
		move_uploaded_file($_FILES["photo"]["tmp_name"], $path_file);
		include '../connect.php';
		$sql = "insert into products(name,photo,manufacturer,price) values('$name','$path_file','$manufacturer','$price')";
		$add = mysqli_query($log_sql,$sql);
		mysqli_close($log_sql);
		header('location:add_product.php?success=Add successed');
		exit();
		}
	header('location:add_product.php?error=Cannot be left blank');

