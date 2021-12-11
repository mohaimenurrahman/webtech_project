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
	    <h1> You are applied the selected job. </h1>
		
		<a href="../views/home.php">HomePage</a> <br>
		<a href="../views/signup.html"> Create New Account</a> <br>
	    <a href="../views/joblist.php"> Job List</a> <br>
		<a href="../views/logout.php"> Logout</a> <br>
		</center>
    </body>
</html>

<?php
	}else{
		header('location: ../views/login.html');
	}
?>