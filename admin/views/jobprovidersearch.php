companysearch.php
<?php 

	$search = $_REQUEST['d1'];
   
	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from jobprovider where username like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
				    <td>Id</td>
					<td>Name</td>
					<td>Email</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
		                <td>{$row['id']}</td>
						<td>{$row['username']}</td>
						<td>{$row['email']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>