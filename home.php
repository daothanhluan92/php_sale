<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Shop phone</title>
</head>
<body>
	<?php
	session_start();
	if(isset($_SESSION['name'])){ ?>
		<h1>Welcome <?php echo $_SESSION['name']; ?> to Shop!</h1>
		<a href="logout.php">Logout</a>
	<?php }
	else { ?>
		<a href="login.php">Login</a>
		<br>
		<a href="register.php">Register</a>
	<?php } ?>
	<?php
	include 'connect.php';
	$sql = "select * from products";
	$result = mysqli_query($log_sql,$sql);	
	?>
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PHOTO</th>
			<th>PRICE</th>
			<th>BUY</th>
		</tr>
		<?php foreach($result as $each) { ?>
			<tr>
				<td><?php echo $each['id']?></td>
				<td><?php echo $each['name']?></td>
				<td><img src="./root/<?php echo $each['photo']?>" height=100px></td>
				<td><?php echo $each['price'].'$'; ?></td>
				<td><a href="cart.php?id=<?php echo $each['id']?>">ADD CART</a></td>
			</tr>
		<?php } ?>
	</table>
 
</body>
</html>
