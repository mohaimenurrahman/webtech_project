<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>

	<script>
		function validateForm(){
			var username= document.getElementById ("username").value;
			var password= document.getElementById ("password").value;
			var type= document.getElementById ("type").value;

			        if (username == "") {
						alert("Username must be filled out");
						return false;
					}
					if (password == "") {
						alert("Password must be filled out");
						return false;
					}
					if (type == "") {
						alert("Type must be filled out");
						return false;
					}
				}
	</script>

<body>
	<form method="post" action="../controller/logincheck.php" onsubmit="return validateForm()">
		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Type </td>
					<td>
						<input type="radio" id="type" name="type" value="admin">Admin
						<input type="radio" id="type" name="type" value="placementOfficer">Placement Officer
						<input type="radio" id="type" name="type" value="jobProvider">Job Provider
						<input type="radio" id="type" name="type" value="jobSeeker">Job Seeker
					</td> 
				</tr>	
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td> Create an account: <a href="signup.html">Signup</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>