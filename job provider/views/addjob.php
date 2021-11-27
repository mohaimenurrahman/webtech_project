<html>
<head>
	<title>Add Job</title>
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

	<form method="post" action="../controller/jobcheck.php">
		<fieldset>
			<legend>Add Job</legend>
			<div style="text-align:right;"><a href="home.php">Back </a> | <a href="../controller/logout.php" >Logout</a></div>
			<table>
				<tr>
					<td>Company Name:</td>
					<td><input type="text" name="company_name" value=""></td>
				</tr>
				<tr>
					<td>Job Title:</td>
					<td><input type="text" name="job_title" value=""></td>
				</tr>
				<tr>
					<td>Salary:</td>
					<td><input type="text" name="salary" value=""></td>
				</tr>

				<tr>
					<td>Apply Last Date:</td>
					<td><input type="date" name="date" value=""></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="ADD"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>