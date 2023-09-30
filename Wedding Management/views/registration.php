<
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	<link rel="stylesheet" href="../views/CSS/style.css">
	<script src="../views/script/Script.js"></script>
	
</head>
		<?php
			include('../views/templates/header.php');
		?>	

		<br><br><br><br><br><br>
<body>
	<div class="aanimation">
		<div class="sreg">

			<div class="mainreg">

		<div class="registration-form">

					<h2>Create an Account</h2>
					<p>Already have an account? &#160 <a href="Login.php"><span class="rlink">Login</span></a></p>
				
				<br>
				<form name="regform" action="../controller/RegistrationAction.php" method="POST" onsubmit="return( validateRegistrationForm(this));" >

						<label for="fname" class="lll">First Name</label><br>
						<input type="text" name="firstname" id="firstname" class="linput" autofocus>
						<span id="regerr1"></span>
						<br><br>
						<label for="fname" class="lll">Last Name</label><br>
						<input type="text" name="lastname" id="lastname" class="linput">
						<span id="regerr2"></span>
						<br><br>

						<label for="phone" class="lll">Phone</label><br>
						<input type="phone" name="phone" id="phone" class="linput">
						<span id="regerr3"></span>
						<br><br>

						<label for="email" class="lll">Email</label><br>
						<input type="text" name="email" id="email" class="linput">
						<span id="regerr4"></span>
						<br><br>

						<label for="username"><span class="lll">USERNAME</span></label><br>
						<input type="text" name="username" id="username" class="linput">
						<span id="regerr5"></span>
						<br><br>

						<label for="password"><span class="lll">PASSWORD</span></label><br>
						<input type="password" name="password" id="password" class="linput">
						<span id="regerr6"></span>
						<br><br>

						<label for="cpassword"><span class="lll">Confirm Password</span></label><br>
						<input type="password" name="cpassword" id="cpassword" class="linput">
						<span id="regerr7"></span>
						<br>
                         <br>
						<input type="submit" value="SIGN UP" class="rsubmit">
						<p class="hhr">
							<a href="../views/Login.php"  class="kl">Go back to Login page</a></p>
						<p id="msg"></p>
					</form>
					
				</div>
				</div>

		</div>
		</div>
	<div class="rfooter">
		<?php
			include('../views/templates/footer.php');
		?>	
	</div>
	<script src="../views/script/Script.js"></script>
</body>
</html>