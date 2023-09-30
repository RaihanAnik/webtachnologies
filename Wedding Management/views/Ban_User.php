<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		
		<h1 style="color: darkcyan;" align="center">Wedding Management System</h1>
		<br>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>
		
		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		<a href="../views/login.php"><p style="text-align: center;">Login Page</p></a>
		<link rel="stylesheet" href="../views/CSS/ManageUser.css">
		

		<?php
		include('templates/footer.php');


	}
	else
	{
		?>
		<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php');
	 ?>
	<title>Ban Users</title>
	<br><br><br><br>
	<h1 align="center">Ban Users</h1>
	<br>
	<form action="../controller/ManageUsersBanAction.php" method="POST"  novalidate>
		
					<br>
					<div class="BU1">
						<label for="user's_username">User ID:</label>
						<br>
						<input type="text" name="user's_username" id="user's_username" size="50" required autofocus>
						<br><br>						
						<input type="submit" name="Ban_User" value="Ban User">
						</div>
	
	</form>	

	<br>
	<a href="../views/Manage_users.php">Previous page</a> 
	<div class="BU5">
	<?php include('templates/footer.php'); }  ?>
	</div>
	</html>