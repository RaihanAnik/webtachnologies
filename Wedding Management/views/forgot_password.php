<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forgot Password</title>
	
	<link rel="stylesheet" href="../views/CSS/forgotpassword.css">
	
	
</head>
<body>
	<div class="RP">
	<h1>Reset Password</h1>
</div>
			<form action="../controller/ForgetPasswordAction.php" method="POST">
				<div class="fp">

				<label for="username">Username</label>
				<input type="text" name="username" id="username">
				<br><br>

				<label for="Npassword">New Password</label>
				<input type="password" name="Npassword" id="Npassword">
				<br><br>
				<label for="CNpassword">Confirm New Password</label>
				<input type="password" name="CNpassword" id="CNpassword">
				<br><br>

				<input type="submit" name="Reset" value="Reset">
				<br><br>
			</form>
		</div>
	<div class="GB">	
	<a href="Login.php">Go Back</a>
	</div>
	<div class="RP2">
		<?php
			include('../views/templates/footer.php');
		?>	
	</div>
</html>