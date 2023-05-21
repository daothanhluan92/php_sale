<?php
if(!empty($_GET['error'])){ ?>
 <span style="color:red"><?php echo $_GET['error'];  ?></span>
<?php } ?>
<form method="post" action="process_login.php">
	Email
	<input type="text" name="email">
	<br>
	Password
	<input type="text" name="password">
	<br>
	<button>Login</button>
</form>