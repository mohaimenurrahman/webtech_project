<?php 
	session_start();
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>Apply Verification Page</title>
    </head>
    <body>
		<center>
		<th> 
			<a href="home.php"> Back |</a> 
			<a href="home.php"> Home |</a> 
			<a href="../controller/logout.php"> Logout</a>
		</th> 
	    <h1> You are applied the selected job. </h1>
		    <a href="../views/home.php">HomePage</a> <br>
			<a href="../views/signup.html"> Create New Account</a> <br>
			<a href="../views/profile.php"> My Profile</a> <br>
			<a href="../views/joblist.php"> Job List</a> <br>
			<a href="../views/uploadCV.php"> Upload CV</a> <br>
			<a href="../controller/logout.php"> Logout</a> <br>
		</center>
    </body>
</html>

<?php
	}else{
		header('location: ../views/login.php');
	}
?>