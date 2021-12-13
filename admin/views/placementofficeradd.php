<html>
<head>
	<title>Signup Page</title>
	<link href="../asset/adminsignup.css" type="text/css" rel="stylesheet" />

    <script>
        
        function validateForm() {
            
            var username = document.getElementById("usernamee").value;
            var password = document.getElementById("passwordd").value;
            var email = document.getElementById("emaill").value;
            var gender = document.getElementById("genderr").value;
            var dateofbirth = document.getElementById("dateofbirthh").value;
            var type = document.getElementById("typee").value;
            var salary = document.getElementById("salaryy").value;
            
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
            if (type == "") {
                alert("Type must be filled out");
                return false;
            }
            if (salary == "") {
                alert("Salary must be filled out");
                return false;
            }
            
        }
    </script>

</head>

<body>

	<form method="post" action="../controller/placementofficeraddcheck.php" onsubmit="return validateForm()" class="container">
		<fieldset >
			<legend id="10">Signup</legend>
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" id="usernamee" name="username" value=""></td>
				</tr>
				
				<tr>
					<td>Password:</td>
					<td><input type="password" id="passwordd" name="password" value=""></td>
				</tr>
				
				<tr>
					<td>Email:</td>
					<td><input type="email" id="emaill" name="email" value=""></td>
				</tr>

				 <tr>
				    <td>Gender </td>
					<td>
						Male<input type="radio" id="genderr" name="gender" value="Male">
						Female<input type="radio" id="genderr" name="gender" value="Female">
						Others<input type="radio" id="genderr" name="gender" value="Others"> 
					</td> 
                </tr>	
				
				<tr>
				    <td>Date Of Birth: </td>
					<td><input type="date" id="dateofbirthh" name="dateofbirth" value=""> </td> 
                </tr>	

                <tr>
				    <td>Type </td>
					<td>
						Admin<input type="radio" id="typee" name="type" value="admin">
						Placement Officer<input type="radio" id="typee" name="type" value="placementOfficer">
						Job Provider<input type="radio" id="typee" name="type" value="jobProvider"> 
						Job Seeker<input type="radio" id="typee" name="type" value="jobSeeker"> 
					</td> 
                </tr>

                <tr>
				    <td>Salary: </td>
					<td><input type="text" id="salaryy" name="salary" value=""> </td> 
                </tr>				
			
				
				<tr>
					<td><input type="reset" name="" value="Reset"></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>

			</table>

		</fieldset>

	</form>


</body>

</html>