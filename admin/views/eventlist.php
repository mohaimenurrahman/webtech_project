<?php 

	require_once('../model/eventModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Event List</title>
<body>	
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
				<a href="../views/event.php">ADD</a> |
				<a href="editevent.php?id=<?=$user['id']?>">EDIT</a> | 
				<a href="deleteevent.php?id=<?=$user['id']?>">DELETE</a> 
			</td>
		</tr>
	<?php } ?>
	</table>
			
		</fieldset>
	</form>
</body>
</html>