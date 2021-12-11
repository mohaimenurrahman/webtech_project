<?php 
	require_once('../model/jobModel.php');

	$id = $_REQUEST['id'];
	$data = getUsersById($id);
?>

<html>
<head>
	<title>Edit Job</title>
</head>
<body>
	
	<form method="post" action="../controller/editcheck.php">
		<fieldset>
			<legend>Edit Job</legend>
			<table>
				<tr>
					<td>Compnay Name:</td>
					<td><input type="text" name="company_name" value="<?=$data['company_name']?>"></td>
				</tr>
				<tr>
					<td>Job Title:</td>
					<td><input type="text" name="job_title" value="<?=$data['job_title']?>"></td>
				</tr>
				<tr>
					<td>Salary:</td>
					<td><input type="text" name="salary" value="<?=$data['salary']?>"></td>
				</tr>

                <tr>
					<td>Last Date:</td>
					<td><input type="text" name="date" value="<?=$data['date']?>"></td>
				</tr>
				
				<tr>
				    <td> <hr> </td>
					<td> </td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="id" value="<?=$data['id']?>"></td>
					<td><input type="submit" name="submit" value="Update"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>