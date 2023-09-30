<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		<h1 style="color: darkcyan;" align="center">Wedding Management System</h1>
		<br>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>
		<br>
		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		<a href="/views/login.php"><p style="text-align: center;">Login Page</p></a>


		<?php
		include('templates/footer.php');
	}
	else
	{
		?>
		<br><br>
<!DOCTYPE html>
<html>

<title>Manage Employee</title>

<?php include("templates/header.php"); ?>
<br><br><br><br>
<div class="ME2">
<h2 align="center">Manage Employee</h2>
</div>
<link rel="stylesheet" href="../views/CSS/ManageEmployee.css">

	<div class="ME1">
			<br><br>
			<a href="view_employee.php"><b>1.View Total employees</b></a>			
			<br><br>
			<a href="fire_employee.php"><b>2.Fire employees</b></a>
			<br><br>		
	

	<br>

	<a href="../views/Dashboard.php"><b style="color: Red;">Back</b></a>
	</div>
	<br><br>
	<div class="ME3">
	<?php include("templates/footer.php"); 
} 
	?>
</div>
</html>