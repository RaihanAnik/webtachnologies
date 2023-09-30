<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>No Access</title>
		<h1 style="color: darkcyan;" align="center">Wedding Management System</h1>
		<br>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>

		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		<a href="/views/login.php"><p style="text-align: center;">Login Page</p></a>
		<link rel="stylesheet" href="../views/CSS/ManageUser.css">

		<?php
		include('templates/footer.php');
	}
	else
	{
		?>
<!DOCTYPE html>
<html>
<title>Manage Users</title>
<?php include("templates/header.php"); ?>
<br><br><br><br>
<div class="MU4">
<h2 align="center">Manage Users</h2>
</div>
<link rel="stylesheet" href="../views/CSS/ManageUser.css">

	
		<div class="MU1">
			<br><br>
			<a href="Add_User.php"><b>1.Add User</b></a>			
			<br><br>
			<a href="Ban_User.php"><b>2.Ban User</b></a>
			<br><br>		
	

	<br>
	<a href="../views/Dashboard.php"><b style="color: blue;">Back</b></a>
	</div>
	<br><br>
     
     <div class="MU2">

	<?php include("templates/footer.php"); 
} 
	?>
	</div>
</html>