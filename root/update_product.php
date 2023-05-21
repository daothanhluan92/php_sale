<?php 
	session_start();
	if (isset($_GET['error'])) { ?>
		<span style="color:red"><?php echo $_GET['error'] ?></span>
	<?php
	$id = $_SESSION['id'];
	}else{
	$id = $_GET['id'];
	$_SESSION['id'] = $id;
	}
	include '../connect.php';
	$sql = "select * from products where id='$id'";
	$join = mysqli_query($log_sql,$sql);
	$result = mysqli_fetch_array($join);
?>
<form method="post" action="process_update.php" enctype="multipart/form-data">
	Name
	<input type="text" name="name" value="<?php echo $result['name'] ?>">
	<br>
	Photo
	<input type="file" name="photo">
	<br>
	Photo old
	<input type="hidden" name="photo_old" value="<?php echo $result['photo'] ?>">
	<img src="<?php echo $result['photo'] ?>" height=100px >
	<br>
	Manufacturer
	<input type="text" name="manufacturer" value="<?php echo $result['manufacturer'] ?>">
	<br>
	Price
	<input type="text" name="price" value="<?php echo $result['price'] ?>">
	<br>
	<button>Update</button>
</form>