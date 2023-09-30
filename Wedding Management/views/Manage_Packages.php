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
<title>Manage Packages</title>

<?php include("templates/header.php") ?>
<br><br><br><br>
<div class="MP2">
<h2 align="center">Manage Package</h2>
</div>
<link rel="stylesheet" href="../views/CSS/Manage_Packages.css">
<div class="MP">

		<legend style="text-align: center;"><b> Create Your Wedding Packages</b></legend>
			<br><br>
			<a href="../views/View_events.php"><b>1.View Packages</b></a>
			<br><br>
			<a href="../views/Create_events.php"><b>2.Create Packages</b></a>
			<br><br>		
	

	<br>
	<a href="../views/Dashboard.php"><b style="color: blue;">Back</b></a>
	</div>
	<br><br>
     <div class="Mfooter">
	<?php 

	      include("templates/footer.php"); 
} 
	?>
	</div>
</html>