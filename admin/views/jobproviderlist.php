<?php 

    require_once('header.php');
	require_once('../model/jobProviderModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Provider List</title>
</head>
<body>

	 <center style="background-color:#FF99FF">
            <a href="home.php">Back |</a>
            <a href="home.php">Home |</a>
            <a href="../controller/logout.php">Logout</a>
     </center>

     <br><br><br>

     <center>
        <input type="text" id="d1" name="name" value="" onkeyup="ajax()" />
          <input type="button" name="click" value="Search" onclick="ajax()" />
     </center>

     <div id="d2" align="right" width="500">
        
     </div>

     <br><br><br> <br>

	<form>
			<table border="1" align="center">
		  <tr align="center">
			<th>Name</th>
			<th>Email</th>
			<th>Action</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['username']?></td>
			<td><?=$user['email']?></td>
			<td>
				<a href="jobproviderdelete.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
	</form>

	 <script type="text/javascript" src="../asset/jobproviderscript.js"></script>

</body>
</html>