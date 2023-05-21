<h1>You are ADMIN</h1>
<a href="add_product.php">Add</a>
<?php
include '../connect.php';
	$sql = "select * from products";
	$result = mysqli_query($log_sql,$sql);	
	?>
	<table border="1" width="100%">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>PHOTO</th>
			<th>PRICE</th>
			<th>EDIT</th>
			<th>DELETE</th>
		</tr>
		<?php foreach($result as $each) { ?>
			<tr>
				<td><?php echo $each['id']?></td>
				<td><?php echo $each['name']?></td>
				<td><img src="<?php echo $each['photo']?>" height=100px></td>
				<td><?php echo $each['price'].'$'; ?></td>
				<td><a href="./update_product.php?id=<?php echo $each['id']?>">EDIT</a></td>
				<td><a href="./root/delete.php?id=<?php echo $each['id']?>">DELETE</a></td>
			</tr>
		<?php } ?>
	</table>



