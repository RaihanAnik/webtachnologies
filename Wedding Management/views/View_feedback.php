<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title> No Access</title>
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
		
			<title>View Feedbacks</title>			
			<?php include('templates/header.php'); ?>
<br><br><br><br><br>
		<link rel="stylesheet" href="../views/CSS/Feedback.css">
			<div class="FB1">
			<h2 align="center">Feedbacks</h2>
		</div>
		<div class="FB2">	
	<?php
		require "../model/registrationdb.php";
		$sql = "SELECT * FROM feedback";

        $result=mysqli_query($connect,$sql);

          while($row = mysqli_fetch_assoc($result))
            {
         
                
                echo "ID: ".$row['id']."<br>";
                echo "Name: ".$row['username']."<br>";
                echo "Feedback: ".$row['feedback']."<br>";
                
            
        }
	}
			
		?>	

			
			<br>
			<a href="../views/Dashboard.php"><b>Back</b></a>
		
	 	</div>	
		<div class="FB3">
	<?php	include('../views/templates/footer.php'); ?>
</div>
	</html>