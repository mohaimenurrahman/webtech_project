<?php 

	$search = $_REQUEST['d1'];
   
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from reviews where mane like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
				    <td>Id</td>
					<td>Email</td>
					<td>Name</td>
					<td>Description</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
		                <td>{$row['id']}</td>
						<td>{$row['email']}</td>
						<td>{$row['mane']}</td>
						<td>{$row['description']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>