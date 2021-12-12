<?php 

	$search = $_REQUEST['d1'];
   
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from placementofficer where username like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
					<td>Name</td>
					<td>Email</td>
					<td>Salary</td>
					<td>Gender</td>
					<td>DateOfBirth</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
		       
						<td>{$row['username']}</td>
						<td>{$row['email']}</td>
						<td>{$row['salary']}</td>
						<td>{$row['gender']}</td>
						<td>{$row['dateofbirth']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>