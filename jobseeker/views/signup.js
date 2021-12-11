<html>
<head>
	<title>Signup Page</title>

	<script>
		function validateForm(){
			var username = document.getElementById("username").value;
			var password = document.getElementById("password").value;
			var email = document.getElementById("email").value;
			var gender = document.getElementById("gender").value;
			var dateofbirth = document.getElementById("dateofbirth").value;
			var address = document.getElementById("address").value;
			var mobile = document.getElementById("mobile").value;
			var type = document.getElementById("type").value;

			if (username == "") {
                alert("Username must be filled out");
                return false;
            }
            if (password == "") {
                alert("Password must be filled out");
                return false;
            }
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            if (gender == "") {
                alert("Gender must be filled out");
                return false;
            }
            if (dateofbirth == "") {
                alert("DateOfBirth must be filled out");
                return false;
            }
			if (address == "")
			    alert("Address must be filled out");
                return false;
            }
			if (mobile == "")
			    alert("Mobile must be filled out");
                return false;
            }
            if (type == "") {
                alert("Type must be filled out");
                return false;
            }
		}
	</script>
</head>

    <body>
	  <form method="post" action="../controller/signupcheck.php" onsubmit="return validateForm()" class="container">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>

               <tr>
					<td>Email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>

                <tr>
				    <td>Gender: </td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
						<input type="radio" name="gender" value="others">Others
					</td> 
                </tr>

                 <tr>
					<td>Date Of Birth:</td>
                    <td><input type="date" name="dateofbirth" value=""></td>
				</tr>	

				<tr>
					<td>Address:</td>
					<td><input type="text" name="address" value=""></td>
				</tr>
				
				<tr>
					<td>Mobile:</td>
					<td><input type="phone" name="mobile" value=""></td>
				</tr>

				<tr>
				    <td>Type </td>
					<td>
						<input type="radio" name="type" value="admin">Admin
						<input type="radio" name="type" value="placementOfficer">Placement Officer
						<input type="radio" name="type" value="jobProvider">Job Provider
						<input type="radio" name="type" value="jobSeeker">Job Seeker
					</td> 
                </tr>	

                <tr>
                	<td><input type="reset" name="" value="Reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
				<tr>
					<td> <a href="login.html">Login</a> </td>
					<td> </td>
				</tr>
			
			</table>
		</fieldset>
	</form>
   </body>
</html>