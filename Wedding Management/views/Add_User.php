<
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link rel="stylesheet" href="../views/CSS/registration.css">
	<script src="../views/script/Script.js"></script>
	
</head>
		<?php
			include('../views/templates/header.php');
		?>	
<body>
	<div class="aanimation">

		<div class="sreg">

			<div class="mainreg">

				<div class="login-title">
					<h2>Add User</h2>
					 <a href="Login.php"><span class="rlink">Login</span></a>
				</div>
				<br><br>

				<div class="Add User-form">

					<form name="regform" action="../controller/AddUserAction.php" method="POST" onsubmit="return( validateRegistrationForm(this));" >

						<label for="fullname" class="lll">Full Name</label><br>
						<input type="text" name="fullname" id="fullname" class="linput" autofocus>
						<span id="regerr1"></span>
						<br><br>

						<label for="phone" class="lll">Phone</label><br>
						<input type="phone" name="phone" id="phone" class="linput">
						<span id="regerr2"></span>
						<br><br>

						<label for="email" class="lll">Email</label><br>
						<input type="text" name="email" id="email" class="linput">
						<span id="regerr4"></span>
						<br><br>

						<label for="username"><span class="lll">USERNAME</span></label><br>
						<input type="text" name="username" id="username" class="linput">
						<span id="regerr5"></span>
						<br><br>

						<br><br>

                         <br>
						<input type="submit" value="SIGN UP" class="rsubmit">
						<p class="hhr"><a href="../views/Dashboard.php"  class="kll">Go back to Dashbroad</a></p>
						<p id="msg"></p>
					</form>
					
				</div>
			
			</div>

		</div>
		
	</div>
	<span class="rfooter">
		<?php
			include('../views/templates/footer.php');
		?>	
	</span>

	<script src="../views/script/Script.js"></script>
</body>
</html>