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

		<?php
		include('templates/footer.php');

	}
	else
	{
		?>
		<!DOCTYPE html>
<html>
	
	<?php include('templates/header.php'); ?>


	<title>Fire Employee</title>
	br><br><br><br><br>
	
	<h1 align="center">Fire Employee</h1>
	<br>
	<form action="../controller/ManageEmployeeFireAction.php" method="POST"  novalidate>
	<fieldset>		
					<br>
						<label for="employee_name">Employee ID:</label>
						<br>
						<input type="text" name="employee_name" id="employee_name" size="50" required autofocus>
						<br><br>						
						<input type="submit" name="Fire" value="Fire">
	</fieldset>
	</form>	
	<br>
	<a href="../views/Manage_Employee.php">Previous page</a> 
	<?php include('templates/footer.php'); }  ?>
	</html>