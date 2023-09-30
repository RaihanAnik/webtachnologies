<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		<div class="DS1">
		<h1 style="color: darkcyan;" align="center">Wedding Management System</h1>
		<br>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>
		
		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		

		<a href="../views/Login.php"><p style="text-align: center;">Login Page</p></a>
		</div>

		<?php
		include('templates/footer.php');
		

	}
	else
	{
		?>
		<!DOCTYPE html>
<html>
<body>

	<?php include('templates/header.php')  ?>

	<br><br><br><br>

	<link rel="stylesheet" href="../views/CSS/Dashbroad.css">
<?php 
		//printed the value of cookies
		if(isset($_COOKIE['UserVisit']))
		{
		$last = $_COOKIE['UserVisit'];
		echo "You last visited on ". $last;
		}		
	 ?>
	
	<title>Dashboard</title>
	
	<h2 align="center">Dashboard</h2>

	<div class="fe">
	<legend style="text-align: center;">Features</legend>
	</div>	
	<div class="Dbody">

	<div class="dbr">

		<br><br>
		<label>1.</label>
		<a href="../views/Manage_Packages.php">Manage Packages</a>
		<br><br>
		<label>2.</label>	
		<a href="../views/Manage_Employee.php">Manage Employees</a>
		<br><br>
		<label>3.</label>
		<a href="../views/Manage_users.php">Manage Users</a>
		<br><br>
		<label>4.</label>
		<a href="../views/AddEmployee.php">Add Employee</a>	
		<br><br>		
		<label>5.</label>
		<a href="../views/Member_record.php">Member Records</a>	
		<br><br>
		<label>6.</label>
		<a href="../views/view_feedback.php">View Feedbacks</a>	
		<br><br>

		</div>
	</div>
<br><br>
<div class="lfooter">
<?php include('templates/footer.php') ?>
</div>

</html>
</body>
<?php
	}

?>
