                
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
		include('templates/footer.php');
		

	}
	else
	{
		?>

		<!DOCTYPE html>
		<html>
			<title>View Employees</title>
		<?php include('templates/header.php');	?>
		
<br><br><br><br><br>
		<h2 align="center">View Employees</h2>

		<?php
		require "../model/registrationdb.php";
		$sql = "SELECT * FROM employee";

        $result=mysqli_query($connect,$sql);

          while($row = mysqli_fetch_assoc($result))
            {
         
                
                echo "ID: ".$row['id']."<br>";
                echo "Name: ".$row['full_name']."<br>";
                echo "Phone: ".$row['phone']."<br>";
                echo "Email: ".$row['email']."<br>";
                echo "Gender: ".$row['gender']."<br>";
                echo "Post: ".$row['post']."<br><hr>";
                
            
        }
			}
			
		?>
			

			<br>   
			<a href="../views/Manage_Employee.php">Go Back</a>
		</body>
	<?php 

		include('templates/footer.php');
	
	

?>
</html>