<?php 
	session_start();
	include('header.php');
	if(isset($_COOKIE['flag'])){
	//$name = $_COOKIE['name'];
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>Home Page</title>
    </head>
    <body>
		<center>
	    <h2>Social Network System for Job Placement</h2> <br><br>
	    <h3 align="center">Welcome <?php echo $_COOKIE['name'] ?></h3> <br><br>

		<a href="../views/home.php">HomePage</a> <br>
		<a href="../views/signup.html"> Create New Account</a> <br>
	    <a href="../views/joblist.php"> Job List</a> <br>
		<a href="../controller/logout.php"> Logout</a> <br>
		</center>
    </body>
</html>

<?php
	}else{
		header('location: ../views/login.html');
	}
?>