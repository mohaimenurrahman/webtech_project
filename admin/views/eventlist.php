<?php 

	require_once('../model/eventModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Event List</title>
<body>	

     <center>
            <a href="../views/home.php">Back |</a>
            <a href="../views/home.php">Home |</a>
            <a href="../controller/logout.php">Logout</a>
     </center>
     
     <br>
     <br>
     <br>

     <center>
     	<input type="text" id="d1" name="name" value="" onkeyup="ajax()" />
          <input type="button" name="click" value="Search" onclick="ajax()" />
     </center>

         
     <div id="d2" align="right" width="500">
     	
     </div>
     
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>


     <center>
          <a href="../views/event.php">ADD EVENT</a> 
     </center>    
     <br>
     <br>


	<table border="1" align="center">
	<tr align="center">
		<th>Event Name</th>
		<th>Date</th>
		<th>Description</th>
		<th>Action</th>
	</tr>

	<?php  
		$result = getAllUsers();
		while ($user = mysqli_fetch_assoc($result)) { 
	?>
		<tr>
			<td><?=$user['name']?></td>
			<td><?=$user['date']?></td>
			<td><?=$user['description']?></td>
			<td>
				<a href="editevent.php?id=<?=$user['id']?>">EDIT</a> | 
				<a href="deleteevent.php?id=<?=$user['id']?>">DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
			
		</fieldset>
	</form>

	<script type="text/javascript" src="../asset/eventscript.js"></script>

</body>
</html>