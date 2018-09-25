
<?php
	session_start();
	error_reporting(0);
		$user = array(
			"user" =>"sherla",
			"password" =>"sherla"
		);

	if (isset($_POST['submit'])) {
		if ($_POST['username']==$user['user'] && $_POST['password']==$user['password']) {
			$_SESSION['username']= $_POST['username'];
			echo "Anda berhasil Login $_POST[username]";
			echo "<a href ='proses.php'>Link</a>";
			# code...
		}else {
			display_login_form();
			echo "Username atau password anda tidak valid";
		} 

	}
	else{
		display_login_form();
	}
	function display_login_form(){ ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method ='POST'>
			<label for="username">username</label>
			<input type="text" name="username" id="username">
			<label for="password">password</label>
			<input type="password" name="password" id="password">
			<input type="submit" name="submit" value="submit">
		</form>
	<?php } ?>


