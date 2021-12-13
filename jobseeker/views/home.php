<?php 
	session_start();
	include('header.php');
	if(isset($_COOKIE['flag'])){
?>

<!DOCTYPE html>
<html>
    <head>
	    <title>Home Page</title>
		<style>
			h1{
				background-color: black;
				color: white;
				font-size: 40px;
			}
			h3{
                background-color: yellow;
				color: black;
				font-size: 25px;
			}
            .menu{
				background-color: white;
				color: white;
				font-size: 20px;
			}
		</style>
    </head>
	
    <body>
		<center>
			<h1>Social Network System for Job Placement</h2> <br>
			<h3 align="center">Welcome to <?php echo $_COOKIE['name']?>.....</h3> <br>
		<div class="menu">
			<a href="../views/home.php">HomePage</a> <br>
			<a href="../views/signup.html"> Create New Account</a> <br>
			<a href="../views/profile.php"> My Profile</a> <br>
			<a href="../views/joblist.php"> Job List & Search</a> <br>
			<a href="../views/uploadCV.php"> Upload CV</a> <br>
			<a href="../views/changePassword.php"> Change Password</a> <br>
			<a href="../controller/logout.php"> Logout</a> <br>
		</div>
		</center>
    </body>
</html>

<?php
	}else{
		header('location: ../views/login.php');
	}
?>