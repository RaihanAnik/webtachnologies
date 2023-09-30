<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		<div class="CP4">
		<br>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>
		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		<a href="../views/login.php"><p style="text-align: center;">Login Page</p></a>
		</div>

		<?php
		include('templates/footer.php');

	}
	else
	{
		?>
<!DOCTYPE html>
<html>
<title>Change Password</title>
<?php include('templates/header.php')  ?>
<br><br><br><br>
<link rel="stylesheet" href="../views/CSS/Changepassword.css">
     <div class="CP2">
	<h2 align="center">Change Password</h2>
</div>

	<form action="../controller/ChangepasswordAction.php" method="POST">
		
			<div class="CP1";>
			<label for="uname">Username</label><span style="color:red">*</span>
			<input type="text" name="uname" id="uname" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled required>			
			<br><br>
			<label for="password">Password</label><span style="color:red">*</span>
			<input type="password" name="password" id="password">
			<br><br>		
			<input type="submit" name="Update" value="Update">

			<br><br>
			<a href="../views/Dashboard.php">Go Back</a>
		</div>
		
	</form>
	<div class="CP3">
	<?php include('templates/footer.php'); } ?>
	</div>
</html>