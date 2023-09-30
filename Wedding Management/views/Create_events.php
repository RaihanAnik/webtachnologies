<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		<h1 style="color: red; text-align: center;">Please Login first to access this page</h1>
		
		<p style="text-align: center;">You do not the permission to access this page</p>
		<br>
		<a href="../views/login.php"><p style="text-align: center;">Login Page</p></a>
		<link rel="stylesheet" href="../views/CSS/CreateEvents.css">

		<?php
		include('templates/footer.php');

	}
	else
	{
		?>
<!DOCTYPE html>
<html>
	<?php include('templates/header.php')  ?>
	<title>Create Packages</title>

	<h1 align="center">Create Packages</h1>
	<br>	
	<form action="../controller/ManagePackagesCreateAction.php" method="POST" novalidate>
	
		<br>
		<div class="CE1">
			<label>Package Name</label><br>
			<input type="text" name="pname" id="pname"><br><br>
			<label>Package Description</label><br>
			<textarea name="pdes" id="pdes" cols="30" rows="10"></textarea><br><br>
			<label>Price</label><br>
			<input type="number" name="price" id="price"><br><br>
			<input type="submit" name="submit" value="Submit">
			<a href="">

			<br><br>
			<a href="../views/Manage_Packages.php">Go back</a>

	</form>
	</div>


<?php include('templates/footer.php');} ?>
</html>