companysearch.php
<?php 

	$search = $_REQUEST['d1'];
   
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from company where name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
				    <td>Id</td>
					<td>Comany Name</td>
					<td>Address</td>
					<td>Email</td>
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