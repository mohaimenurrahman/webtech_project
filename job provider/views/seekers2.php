<?php 

	$search = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from seekers where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>COMPANY NAME</td>
					<td>ADDRESS</td>
					<td>EMAIL</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
						<td>{$row['id']}</td>
						<td>{$row['name']}</td>
						<td>{$row['address']}</td>
						<td>{$row['email']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>