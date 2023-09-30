<?php 

//cookies
	$Month = 2592000 + time();
		$date = new DateTime(null, new DateTimeZone('Asia/Dhaka'));

		//this adds 30 days to the current time
		setcookie("UserVisit", $date->format("F jS - g:i a"), $Month);
		
	session_start();

	if(isset($_SESSION['username']))
	{
		header("Location: ../views/Dashboard.php");
	}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="../views/CSS/login.css">
	<link rel="stylesheet" href="../views/CSS/style.css">
	<style>
		.Ifooter
		{
			display: inline-block;
			position: relative;
			top: 550px;
		}
		.slogin{

		    position: relative;
		    top: 100px;
		    height: 700px;
		    background-color: #870b36;

			}
	</style>

	<?php 
		include('templates/header.php');
	?>
</head>
	
<body class="lbody">



	<div class="animation">

		<div class="slogin">

			<div class="mainlogin">

				<div class="login-title">
					<h2>Login</h2>
					<p>Wedding Management? &#160 <a href="registration.php"><span class="rlink">Create an account</span></a></p>
				</div>
				<br><br>

				<div class="lform">
				

					<form action="../controller/LoginAction.php" method="POST" onsubmit="return(validateLoginForm(this));">
						<label for="username"><span class="lll">USERNAME</span></label><br>
						<input type="text" name="username" id="username" class="linput" autofocus>
						<span id="err1"></span>

						<br><br>
						<label for="password"><span class="lll">PASSWORD</span></label><br>
						<input type="password" name="password" id="pass" class="linput">
						<span id="err2"></span>

						<br><br>
						<div class="fpass">
							<a href="forgot_password.php"><p>Forgot password?</p></a>
						</div>
						<br><br><br>

						<input type="submit" value="LOGIN" class="lsubmit">
						<p class="hhr"><a href="../views/view_Profile.php"  class="kll">Go back to Profile</a></p>
						<p id="msg"></p>
					</form>
					
				</div>
			
			</div>

		</div>
		
	</div>

	<script src="../views/script/Script.js"></script>
</body>
		<div class="f">
	<?php 
		include('templates/footer.php');
	?>
	</div>
</html>