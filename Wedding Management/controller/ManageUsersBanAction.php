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
<?php include('../views/templates/header.php');  ?>

<h1 style="color: blueviolet;">Fire Employees Action</h1>	
	
	<?php 

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
require"../model/registrationdb.php";
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$user_s_username = test($_POST["user's_username"]);		
			
				
			if (empty($user_s_username) || $user_s_username == NULL ) 
			{
				echo "<br>Fill up the form properly";
				echo "<br>";
				?>
				<p style="color:red;"><b>No User Found</b></p>
				<?php								
			}				
			else
			{	
				
				$sql="SELECT * from users";

				$result=mysqli_query($connect,$sql);

				if (mysqli_num_rows($result)==1) {
					$sqll="DELETE FROM users WHERE id='$employee_name'";
					$connect->query($sqll);
				}
			}
		}
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}

	 ?>

    <br><br>
    <a href="../views/Manage_users.php">Previous page</a> 

<?php include('../views./templates/footer.php'); } ?>


</html>