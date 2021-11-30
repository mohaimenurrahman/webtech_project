<?php 

	require_once('../model/hireModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Hire List</title>
	<style>

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}

	.button {
  background-color: #4CAF50;
  border: 10;
  color: yellow;
  padding: 07px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
   float: right;
}



h3 {
  background-color: black;
  color: white;
  
}

.header {
  padding:05px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}


.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

tr:hover {background-color: yellow;}
</style>
</head>
<body>

	<div style="text-align:center;">
	<form method="post" action="../controller/seekerscheck.php">
		<fieldset>
			<div class="header">
      <h1>"HIRE LIST"</h1>
     
      </div>

      <div class="topnav">
            <a class="active" href="../views/home.php">HOME</a>
            <a href="../views/seekerslist.php">JOB SEEKERS</a>
            <a href="../views/companyprofile.php">COMPANY</a>
            <a href="../views/joblist.php">JOB</a>
            <a href="../views/hirelist.php">HIRE</a>
            <a href="../views/reviewlist.php">REVIEW</a>
            <a href="../views/eventlist.php">EVENT</a>
            <a href="../controller/logout.php">LOGOUT</a>
      </div>

			<div align="right" >
      <a href="../views/joblist.php" class="previous round">&#8249;</a>
      <a href="../views/reviewlist.php" class="next round">&#8250;</a>
      <a href="../views/hirelist.php"><i class="fa fa-refresh" style="font-size:20px"></i></a>
      </div>

      <div align="center" >
      <input type="text" id="name" name="name" value="" onkeyup="ajax()" />
	    <input type="button" name="click" value="Search" onclick="ajax()"></div>

	    <div id="d2" align="center" >

		
	    </div>
	    <script type="text/javascript" src="hire.js"></script>





			<table border="1" align="center">
		<tr align="center" style="background-color:#1abc9c " >
			<th>ID</th>
			<th>NAME</th>
			<th>ADDRESS</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr align="center" style="background-color:#FFFFFF " >
			<td><?=$user['id']?></td>
			<td><?=$user['name']?></td>
			<td><?=$user['address']?></td>
			<td><?=$user['email']?></td>
			<td>
				<a href="../views/hire.html"> ADD</a> |
				<a href="edithirelist.php?id=<?=$user['id']?>"> EDIT</a> | 
				<a href="deletehirelist.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>

	<br><br>
			<div style="text-align:center; font-size:20px;o "><a href="../views/aboutus.html">About Us </a> | <a href="../views/teams.html" > Terms of Service</a> | <a href="../views/contact.html" > Contact Us</a></div>
			<p align="center" > © Copyright 2021 | Job Provider | All right reversed</p>
			
		

			
		</fieldset>
	</form>
</div>

	

	
</body>
</html>