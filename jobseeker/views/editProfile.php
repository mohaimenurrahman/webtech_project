<?php 
    require_once('../model/jobseekerModel.php');

    $name = $_COOKIE['name'];
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql= "SELECT * FROM `jobseeker` WHERE `username` = '$name'";
    $result = mysqli_query($con, $sql);
?>

<html>
</head>
    <body>
	  <form method="post" action="../controller/signupcheck.php">
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
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
   </body>
</html>