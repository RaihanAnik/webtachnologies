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
		include('../views/templates/footer.php');

	}
	else
	{
		?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
	<h1 style="color: blueviolet;">Change Password Action</h1>	
	
	<?php

		function test($users)	
		{
			$users = trim($users);
			$users = stripslashes($users);
			$users = htmlspecialchars($users);
			return $users;
		}		
	?>		
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$password = test($_POST['password']);
			require"../model/registrationdb.php";
			if (empty($_POST['password']))
			{
				echo "Fill up the password properly";			
				?>
				<br>
				<p style="color:red;"><b>Password did not changed</b></p>
				<?php				
			}
			else
			{						
				
				$sql="SELECT * FROM user_list WHERE username='$username'";

				$result=mysqli_query($connect,$sql);

				if (mysqli_num_rows($result)==1) {
					
				$row=mysqli_fetch_assoc($result);

				if ($username==$row['username']) {
					$sqll="UPDATE user_list SET pass='$password', cpass='$password' WHERE username='$username'";
					$connect->query($sqll);
				}
			}
				echo "password changed";
			}				
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
	<br><br>
	<a href="../views/Dashboard.php">Go Back
	<?php 
	
	}
	
	?>
</body>
</html>