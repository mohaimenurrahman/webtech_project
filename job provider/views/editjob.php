<?php 
	include('header.php');
	require_once('../model/jobModel.php');

	$id = $_REQUEST['id'];
	$user = getUsersById($id);
?>

<html>
<head>
	<title>Edit Job List</title>
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

	<form method="post" action="../controller/jobupdate.php">
		<fieldset>
			<legend>Edit </legend>
			<table>
				<tr>
					<td>Company Name:</td>
					<td><input type="text" name="company_name" value="<?=$user['company_name']?>"></td>
				</tr>
				<tr>
					<td>Job Title:</td>
					<td><input type="text" name="job_title" value="<?=$user['job_title']?>"></td>
				</tr>
				<tr>
					<td>Salary:</td>
					<td><input type="text" name="salary" value="<?=$user['salary']?>"></td>
				</tr>

				<tr>
					<td>Apply Last Date:</td>
					<td><input type="date" name="date" value="<?=$user['date']?>"></td>
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