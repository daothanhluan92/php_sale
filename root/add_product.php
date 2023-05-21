<?php
 	if(!empty($_GET['success'])){ ?>
 		<span style="color:green;"><?php echo $_GET['success']; ?></span>
 	<?php }
 	if(!empty($_GET['error'])){ ?>
 		<span style="color:red;"><?php echo $_GET['error']; ?></span>
 	<?php } ?>

<form method="post" action="process_product.php" enctype="multipart/form-data">
	Name
	<input type="text" name="name">
	<br>
	Photo
	<input type="file" name="photo">
	<br>
	Manufacturer
	<input type="text" name="manufacturer">
	<br>
	Price
	<input type="text" name="price">
	<br>
	<button>Add</button>
</form>