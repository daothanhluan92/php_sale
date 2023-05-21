<?php
	session_start();
	$sum=0;
?>
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NAME</th>
		<th>PHOTO</th>
		<th>PRICE</th>
		<th>QUANTITY</th>
		<th>SUM</th>
	</tr>
	<?php foreach($_SESSION['cart'] as $cart){ ?>
	<tr>
		<td><?php echo $cart['id'] ?></td>
		<td><?php echo $cart['name'] ?></td>
		<td><img src="./root/<?php echo $cart['photo'] ?>" height=100px></td>
		<td><?php echo $cart['price'] ?>$</td>
		<td><a href="update_quantity.php?id=<?php echo $cart['id'] ?>&cal=sub">-</a><?php echo $cart['quantity'] ?><a href="update_quantity.php?id=<?php echo $cart['id'] ?>&cal=add">+</a></td>
		<td><?php echo $cart['price']*$cart['quantity'] ?>$</td>
		<?php
		$sum += $cart['price']*$cart['quantity'];
		?>
	</tr>
	<?php } ?>
</table>
SUM :
<?php
	echo $sum.'$';
	if (!empty($_SESSION['name'])) {
?>
<br>
Infomation receiver:
<br>
<form method="post" action="./root/process_order.php">
	Name
	<input type="text" name="name" value="<?php echo $_SESSION['name'] ?>">
	<br>
	Email
	<input type="text" name="email" value="<?php echo $_SESSION['phone'] ?>">
	<br>
	Phone number
	<input type="text" name="phone" value="<?php echo $_SESSION['email'] ?>">
	<br>
	Address
	<input type="text" name="address" value="<?php echo $_SESSION['address'] ?>">
	<br>
	<button>Order</button>
</form>
<?php } else { ?>
<br>
Infomation receiver:
<br>
<form method="post" action="./root/process_order.php">
	Name
	<input type="text" name="name">
	<br>
	Email
	<input type="text" name="email">
	<br>
	Phone number
	<input type="text" name="phone">
	<br>
	Address
	<input type="text" name="address" >
	<br>
	<button>Order</button>
</form>
<?php } ?>
