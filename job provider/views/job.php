<?php 

	$search = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "select * from job where company_name like '%{$search}%'";
	$result = mysqli_query($con, $sql);


	$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>COMPANY NAME</td>
					<td>JOB TITLE</td>
					<td>SALARY</td>
					<td>APPLY LAST DATE</td>
				</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
						<td>{$row['id']}</td>
						<td>{$row['company_name']}</td>
						<td>{$row['job_title']}</td>
						<td>{$row['salary']}</td>
						<td>{$row['date']}</td>
					</tr>";
	}

	$data .= "</table>";
	echo $data;
?>