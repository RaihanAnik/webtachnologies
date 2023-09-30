<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title> No Access</title>
		<h1 style="color: darkcyan;" align="center">Wedding Management System</h1>
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

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$employee_name = test($_POST['employee_name']);		
			require"../model/registrationdb.php";
				
			if (empty($employee_name) || $employee_name == NULL ) 
			{
				echo "<br>Fill up the form properly";
				echo "<br>";
				?>
				<p style="color:red;"><b>No Employee Found</b></p>
				<?php								
			}				
			else
			{	
				$sql="SELECT * from employee";

				$result=mysqli_query($connect,$sql);

				if (mysqli_num_rows($result)==1) {
					$sqll="DELETE FROM employee WHERE id='$employee_name'";
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
    <a href="../views/Manage_Employee.php">Previous page</a> 

<?php include('../views./templates/footer.php'); } ?>


</html>