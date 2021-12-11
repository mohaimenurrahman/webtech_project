<?php 
	include('header.php');
	require_once('../model/eventModel.php');

	$id = $_REQUEST['id'];
	$user = getUsersById($id);
?>

<html>
<head>
	<title>Edit Evint List</title>
	<style>
fieldset {
 background-color: #eeeeee;

  text-align:center;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 10px;
}
</style>

	
</head>
<body>
	<center>	
		<a href="home.php">Back </a> |
		<a href="../controller/logout.php"> logout</a>
	</center>

	<form method="post" action="../controller/eventupdate.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Event Name:</td>
					<td><input type="text" name="name" value="<?=$user['name']?>"></td>
				</tr>
				<tr>
					<td>Date:</td>
					<td><input type="date" name="date" value="<?=$user['date']?>"></td>
				</tr>
				<tr>
					<td>Description:</td>
					<td><input type="text" name="description" value="<?=$user['description']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>