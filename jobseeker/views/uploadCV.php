<html>
<head>
	<meta charset="utf-8">
	<title>Upload CV</title>
</head>
<body>

    <table align="center">
	    <tr> 
		    <th> 
			    <a href="profile.php"> Back |</a>
			    <a href="home.php"> Home |</a> 
				<a href="../controller/logout.php"> Logout</a>
			</th> 
	    </tr>
	</table>
	<br>
	<br>

	<form method="POST" action="../controller/filecheck.php" enctype="multipart/form-data">
		<input type="file" name="myfile" value=""> CV 
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>