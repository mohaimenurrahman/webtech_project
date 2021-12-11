<?php 

	require_once('../model/jobseekerModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Jobseeker List</title>
<body>	

     <center>
            <a href="../views/home.php">Back |</a>
            <a href="../views/home.php">Home |</a>
            <a href="../controller/logout.php">Logout</a>
     </center>
     
    <br><br><br> 

     <center>
        <input type="text" id="d1" name="name" value="" onkeyup="ajax()" />
          <input type="button" name="click" value="Search" onclick="ajax()" />
     </center>

     <div id="d2" align="right" width="500">
        
     </div>

     <br><br><br> <br><br>

		<table border="1" align="center">
		<tr align="center">
			<th>Name</th>
			<th>Email</th>
			<th>Gender</th>
			<th>DateOfBirth</th>
			<th>Action</th>
		</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['name']?></td>
			<td><?=$user['email']?></td>
			<td><?=$user['gender']?></td>
			<td><?=$user['dateofbirth']?></td>
			<td>
				<a href="../controller/jobseekerdelete.php?id=<?=$user['id']?>">DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
			
		</fieldset>
	</form>

	<script type="text/javascript" src="../asset/jobseekerscript.js"></script>
</body>
</html>