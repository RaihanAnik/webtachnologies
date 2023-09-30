<?php 

	session_start();	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		<br>
		<div class="VP2">
		<h1 style="color: black; text-align: center;">Please Login first to access this page</h1>
		
		<p style="color:black; text-align: center;"><b>You do not the permission to access this page</b></p>
		<br>
		<a href="../views/login.php"><p style="text-align: center:;"><b>Login Page</p></b></a>
		<link rel="stylesheet" href="../views/CSS/ViewProfile.css">
	</div>

		<?php
		include('templates/footer.php');


	}
	else
	{
		?>
<!DOCTYPE html>
<html>
	<title>View Profile</title>
	<?php include('templates/header.php'); 
	?>
	<br><br><br><br>
	<div class="VP1">
	<h2 style="color:blueviolet;" align="center">My Profile</h2>
</div>
	<?php
    
		require "../model/registrationdb.php";
		$username=$_SESSION['username'];
		
		$sql = "SELECT * FROM user_list WHERE username='$username'";

        $result=mysqli_query($connect,$sql);
        if (mysqli_num_rows($result)==1) {
        	
          while($row = mysqli_fetch_assoc($result))
            {
         
                
                echo "ID: ".$row['id']."<br>";
                echo "Name: ".$row['first_name']." ".$row['last_name']."<br>";
                echo "Username: ".$row['username']."<br>";
                echo "Phone: ".$row['phone']."<br>";
                echo "Email: ".$row['email']."<br>";
                
            
        }

    }
			
			
		?>

	<br>   
	<a href="../views/Dashboard.php">Go Back</a>
</body>
	<?php include('templates/footer.php'); }  ?>
</html>