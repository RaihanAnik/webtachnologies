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
		require "../model/registrationdb.php";

	}
	else
	{
		?>

		<!DOCTYPE html>
		<html>
			<title>View Events</title>
		<?php include('templates/header.php');	?>
		<h2 align="center">View Events</h2>

		<?php
		$sql = "SELECT * FROM package";

        $result=mysqli_query($connect,$sql);

          while($row = mysqli_fetch_assoc($result))
            {
         
                
                echo "ID: ".$row['id']."<br>";
                echo "Packages name: ".$row['pname']."<br>";
                echo "Description: ".$row['des']."<br>";
                echo "Price: ".$row['price']."<br>";
                
            
        }
        
			}
			
		?>
			

			<br>   
			<a href="../views/Manage_Packages.php">Go Back</a>
		</body>
	<?php 

		include('templates/footer.php');
	
	

?>
</html>