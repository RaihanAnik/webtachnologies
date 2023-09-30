<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$Username = test($_POST['username']);
			$Password = test($_POST['password']);

			//$_SESSION['username']=$_POST['username'];

//------------------------Connect to Database-----------------------------
			include "../model/Registrationdb.php";

//-----------------------------Hash Password------------------------------

			if (empty($Username) || empty($Password)) 
			{
					echo "Fill up the form properly";
					echo "<br>";
					echo "Go back to Login Page and Try again with valid username or password";					
			}
			else
			{			
					$query = "SELECT * FROM user_list WHERE username='$Username' AND pass='$Password'";

        			$result = mysqli_query($connect, $query);

        			if (mysqli_num_rows($result) === 1) 
        			{

           				$row = mysqli_fetch_assoc($result);

            			if ($row['username'] === $Username && $row['pass'] === $Password) 
            			{

				                echo "Logged in!";

				                $_SESSION['username'] = $row['username'];
				      
				                $_SESSION['phone'] = $row['phone'];
				                $_SESSION['email'] = $row['email'];
				                $_SESSION['pass'] = $row['pass'];
				                //var_dump($_SESSION['username']);
				                header("Location: ../views/Dashboard.php");
            			}
					
					}
					else 
					{
			  			echo "Error: " . $query . "<br>" . $connect->error;
					}

			}

		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
		exit();
	?>
	<br><br>
	<a href="../views/Login.php">Go Back</a>
</body>
</html>