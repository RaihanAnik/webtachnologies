<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title> No Access</title>
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
			<title>Members Record</title>	
			<link rel="stylesheet" href="../views/CSS/ManageUser.css">		
			<?php include('templates/header.php'); ?>
			<br><br><br><br>
			<div class="MR2">
			<h2 align="center">All Members Record</h2>
			</div>
			<br>
			<div class="MR3">
			
			<?php 
			
			require "../model/registrationdb.php";
			$sql = "SELECT * FROM users";

        $result=mysqli_query($connect,$sql);

          while($row = mysqli_fetch_assoc($result))
            {
         
                
                echo "ID: ".$row['id']."<br>";
                echo "Name: ".$row['fname']."<br>";
                echo "Phone: ".$row['phone']."<br>";
                echo "Email: ".$row['email']."<br>";
                echo "Username: ".$row['username']."<br> <hr>";
                
				
				
			}

			 ?>

			
			<br>
			</fieldset>
			<br>
			<a href="../views/Dashboard.php"><b>Back</b></a>
			</div>
			<div class="MR1">
			<?php include('../views/templates/footer.php'); 

	}
	
?>
</div>
	</html>