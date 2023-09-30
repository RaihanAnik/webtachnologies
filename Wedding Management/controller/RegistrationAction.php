<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
	<link rel="stylesheet" href="">
	</p>
</head>
<body>
	<h1 style="color: blueviolet;">Registration Action</h1>	
	
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
			$firstname = test($_POST['firstname']);
			$lastname = test($_POST['lastname']);
			$Phone= test($_POST['phone']);
			$Email= test($_POST['email']);
			$Username= test($_POST['username']);
			$Password= test($_POST['password']);
			$Confirm_Password= test($_POST['cpassword']);
				
			if (empty($firstname) || empty($lastname) || empty($_POST['phone']) || empty($_POST['email']) || empty($Username)||empty($Password)||empty($Confirm_Password)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p style="color:red;"><b>Registration Failed</b></p>
				<?php								
			}				
			else
			{
				

				if($_POST['password'] != NULL)
				{
					if ($_POST['password'] == $_POST['cpassword'] ) 
					{
						echo "Password Matched";
						echo "<br>";

						$query="SELECT username FROM User_list ";
						$result=mysqli_query($connect,$query);


						$row = mysqli_fetch_assoc($result);

						var_dump($row);

						  	if ($row["username"]===$Username) {
						  		echo "User Already Exist";
						  	}
						  	else
						  	{
						  		$sql="INSERT into User_list VALUES('id','$firstname','$lastname','$Phone','$Email','$Username','$Password','$Confirm_Password')";
						  		$connect->query($sql);
						  		header("Location:../views/Login.php");
						  	}
						    
						  }
						

					
					else
					{
						echo "Confirm Password did not match";
					}
				}
			
				else
				{
					echo "Password can't be empty.";
				}
		}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

	$connect->close();

?>
<a href="../views/registration.php">Go Back</a>
