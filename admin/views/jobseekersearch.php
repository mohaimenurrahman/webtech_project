<?php 

	$search = $_REQUEST['d1'];
   
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from jobseeker where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
				    <td>Id</td>
					<td>Name</td>
					<td>Email</td>
					<td>Gender</td>
					<td>Date Of Birth</td>\
					<td>Address</td>
					<td>Mobile</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
		                <td>{$row['id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['email']}</td>
						<td>{$row['gender']}</td>
						<td>{$row['dateofbirth']}</td>
						<td>{$row['address']}</td>
						<td>{$row['mobile']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>