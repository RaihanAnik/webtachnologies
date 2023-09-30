
<?php
session_start();
if ($_SESSION['username']==NULL) {
    header("Location:../views/Login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Add Employee</title>
	 <?php include('templates/header.php'); ?>
	 <br><br><br><br>
	<link rel="stylesheet" href="../views/CSS/CreateEvents.css">
	<script src="../views/script/Script.js"></script>
</head>
<body>
	
<div class="AM1">

	<h1>Add Employee</h1>
</div>
<div class="AM2">

<form action="../controller/AddEmployeeAction.php" method="POST" novalidate onsubmit="return(AddEmployeeValidation(this));">
		<label>Full Name:</label>
		<input type="text" name="name" id="name" required autofocus>
			<span id="err1"></span><br><br>
		<label>Phone:</label>
		<input type="phone" name="phone" id="phone">
			<span id="err2"></span><br><br>
		<label>E-mail:</label>
		<input type="email" name="email" id="email">
			<span id="err3"></span><br><br>
		<label>Gender</label>
		<input type="radio" id="male" name="Gender" value="Male">
	  <label for="male">Male</label>
	  <input type="radio" id="Female" name="Gender" value="Female">
	  <label for="Female">Female</label><br><br>
		<label>post</label><br>
		<select name="post" id="post">
		    <option value="Editor">Editor</option>
		    <option value="Photographer">Photographer</option>
		    <option value="Manager">Manager</option>

		 </select><br><br>

		<input type="submit" name="Submit">
		<br>
	</form>
	<a href="../views/Dashboard.php">Go Back</a>
</div>
</body>
<div class="AM3">
     <?php include('templates/footer.php')  ?>
     </div>
</html>