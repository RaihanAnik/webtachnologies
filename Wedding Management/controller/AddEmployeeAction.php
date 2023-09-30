<?php
session_start();
if ($_SESSION['username']==NULL) {
    header("Location:../views/Login.php");
}
require"../model/registrationdb.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration Action</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$name = test_input($_POST['name']);
		$email = test_input($_POST['email']);
		$phone = test_input($_POST['phone']);
		$Gender = isset($_POST['Gender']) ;
		$gender = test_input($_POST['Gender']) ;
		$post = test_input($_POST['post']);

		if (empty($name)||empty($email)||empty($phone)||!isset($Gender)) {
			
			echo "Please fill the empty fields.</br>";
			echo "Employee not added ";
			?>
            <br>
			
			<a href="../views/AddEmployee.php">Go Back</a><?php

		}
		
		else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "Please correct the email";
				
			}
				else{
					?>
					<p>Employee added.</p><br>
					<a href="../views/AddEmployee.php">Add Another Employee.</a>
					<?php
					$sql="INSERT into employee VALUES('id','$name','$phone','$email','$gender','$post')";
					$connect->query($sql);
				}
			}
		

		
	
}
	else{
		echo "Can not process get request method";
	}


	$connect->close();

	?>
</body>
</html>