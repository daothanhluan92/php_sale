<?php
	session_start();
	$id = $_SESSION['id'];
	if(!empty($_POST['name']) and !empty($_FILES['photo']) and !empty($_POST['manufacturer']) and !empty($_POST['price'])) {
		$name = $_POST['name'];
		$manufacturer = $_POST['manufacturer'];
		$price = $_POST['price'];
		$photo = $_FILES["photo"];
		if ($photo['size'] > 0) {
			$temp = explode(".", $_FILES["photo"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
			$path_file = "./photo/" . $newfilename;
			move_uploaded_file($_FILES["photo"]["tmp_name"], $path_file);
		}else{
			$path_file = $_POST['photo_old'];
		}
		include '../connect.php';
		$sql = "update products set name='$name',photo='$path_file',manufacturer='$manufacturer',price='$price' where id='$id'";
		$update = mysqli_query($log_sql,$sql);
		mysqli_close($log_sql);
		header('location:home_root.php');
		exit();
		}
	header('location:update_product.php?error=Cannot be left blank');
