<?php 

	session_start();
	require "../model/registrationdb.php";	
	if (!isset($_SESSION['username']) )
	{
		?>
		<title>Access Denied</title>
		
		<h1 style="color: red; text-align: center;"> Login first to access this page</h1>

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
<?php include('../views/templates/header.php')  ?>

<h1 style="color: blueviolet;">Manage Packages Action</h1>	
	
	<?php

		function test($data)	
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	?>
	<?php 

		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{			
			$ename = test($_POST['pname']);		
			$Sdescription = test($_POST['pdes']);
			$amount = test($_POST['price']);
				
			if (empty($ename)||empty($Sdescription)||empty($amount)) 
			{
				echo "Fill up the form properly";
				echo "<br><br>";
				?>
				<p style="color:red;"><b>Package creation Failed</b></p>
				<?php								
			}				
			else 
			{
				$sql="INSERT into package VALUES('id','$ename','$Sdescription','$amount')";
						  		$connect->query($sql);
						  		echo "Packages Created";
			}
		}	
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}
	?>
	</fieldset>	

    <br><br>
    <a href="../views/Create_events.php">Previous page</a> 

<?php include('../views/templates/footer.php'); } ?>


</html>