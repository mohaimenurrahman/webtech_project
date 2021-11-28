<?php 

	require_once('../model/jobProviderModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Job Provider List</title>
</head>
<body>

	 <center style="background-color:#FF99FF">
            <a href="../views/home.php">Back |</a>
            <a href="../views/home.php">Home |</a>
            <a href="../controller/logout.php">Logout</a>
     </center>

     <br><br><br>

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
				<a href="delete.php?id=<?=$user['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
	</form>
</body>
</html>