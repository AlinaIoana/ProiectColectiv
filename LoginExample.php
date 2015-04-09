<html>
<head>
<title>Login</title>
</head>

<body>
<?php
// Begin our session
session_start();	
 if(!isset($_SESSION['userId'])) { ?>
	<h2>Login Here</h2>
		<form action="loginSubmit.php" method="post">
			<fieldset>
				<p>
					<label for="phpro_username">Username</label>
					<input type="text" id="userName" name="userName" value="" maxlength="20" />
				</p>
				<p>
					<label for="password">Password</label>
					<input type="text" id="password" name="password" value="" maxlength="20" />
				</p>
				<p>
					<input type="submit" value="Login" />
				</p>
			</fieldset>
		</form>
<?php } else {
		echo( $_SESSION['userId'] ); 
		?>
	<h2>Logout Here</h2>
		<p><a href="Logout.php">Log Out Link</p>
<?php } ?>
</body>
</html>