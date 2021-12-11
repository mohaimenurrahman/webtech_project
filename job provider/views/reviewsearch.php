<?php 

	$search = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from reviews where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>EMAIL</td>
					<td>NAME</td>
					<td>DESCRIPTION</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
						<td>{$row['id']}</td>
						<td>{$row['email']}</td>
						<td>{$row['name']}</td>
						<td>{$row['description']}</td>
						
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>