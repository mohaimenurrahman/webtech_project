<?php 
	include('header.php');
	//$result = getAllAdmins();
	//$admin = mysqli_fetch_assoc($result);
	//$id = $admin['id'];

	$username = $_COOKIE['loggedInName'];

	//$result = getAdminsByUserame();
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
</head>
<body>
	<h1 align="center">Welcome <?php echo $_COOKIE['loggedInName'] ?></h1>


	<table align="center">
	    <tr> 
		    <th> 
			    <a href="profile.php" >Profile</a>

				<a href="../controller/logout.php"> Log Out</a>
			</th> 
		</tr>
	</table>
	<br>
	<br>
	
	<table align="center">
	    <tr> <td> <a href="joblist.php"> Posted Jobs</a> </td> </tr>
	    <tr> <td> <a href="adminlist.php"> Admin Pannel</a> </td> </tr>
	    <tr> <td> <a href="company.php"> Company</a> </td> </tr>
	    <tr> <td> <a href="jobprovider.php"> Job Providers</a> </td> </tr>
	    <tr> <td> <a href="placementofficer.php"> Placement Officers</a> </td> </tr>
	    <tr> <td> <a href="jobseeker.php"> Job Seeker</a> </td> </tr>
	</table>
	
</body>
</html>