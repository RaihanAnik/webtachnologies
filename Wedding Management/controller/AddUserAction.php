<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add User Action</title>
	<link rel="stylesheet" href="">
	</p>
</head>
<body>
	<h1 style="color: blueviolet;">Add User Action</h1>	
	
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	?>
	<fieldset>
		<legend><b> Basic Information</b></legend>		
	<?php 

	require "../model/registrationdb.php";

		
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$fullname = test($_POST['fullname']);
			$Phone= test($_POST['phone']);
			$Email= test($_POST['email']);
			$Username= test($_POST['username']);
				
			if (empty($fullname) || empty($_POST['phone']) || empty($_POST['email']) || empty($Username)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p style="color:red;"><b> Failed</b></p>
				<?php								
			}				
			else
			{
				


					
						  	
						  		$sql="INSERT into Users VALUES('id','$fullname','$Phone','$Email','$Username')";
						  		$connect->query($sql);
						  		echo"User Add Successfull";
						  	
		
		}
	}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

	$connect->close();


?>
<br>
<a href="../views/Dashboard.php">Go Back</a>
