<?php 
	session_start();
	if(isset($_GET['error'])){
		$error = $_GET['error'];
?>	
	<span style="color: red;"><?php echo $error; ?></span>	
<?php }
if (isset($_SESSION['name'])) { ?>
 	<form method="post" action="process_login.php">
	Email
	<input type="text" name="email" value="<?php echo $_SESSION['email'] ?>">
	<br>
	Password
	<input type="text" name="password" value="<?php echo $_SESSION['password'] ?>">
	<br>
	<input type="checkbox" name="remember" checked>Remember
	<br>
	<button>Login</button>
</form>
<?php } else{ ?>
<form method="post" action="process_login.php">
	Email
	<input type="text" name="email">
	<br>
	Password
	<input type="text" name="password">
	<br>
	<input type="checkbox" name="remember">Remember
	<br>
	<button>Login</button>
</form>
<?php } ?>