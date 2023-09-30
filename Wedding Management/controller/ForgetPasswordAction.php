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

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			
			$username = test($_POST['username']);
			$Npassword = test($_POST['Npassword']);
			$CNpassword = test($_POST['CNpassword']);
			require"../model/registrationdb.php";
			if (empty($_POST['Npassword']) || empty($_POST['CNpassword']))
			{
				echo "Fill up the boxes properly";			
				?>
				<br>
				<p style="color:red;"><b>Password did not changed</b></p>
				<?php				
			}
			else
			{						
			
				$sql="SELECT * FROM user_list";

				$result=mysqli_query($connect,$sql);


				$row=mysqli_fetch_assoc($result);

				if ($username==$row['username']) {
					$sqll="UPDATE user_list SET pass='$Npassword', cpass='$Npassword' WHERE username='$username'";
					$connect->query($sqll);
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
	<a href="../views/Login.php">Go Back
</body>
</html>