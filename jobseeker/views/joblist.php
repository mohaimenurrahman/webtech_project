<?php
	require_once('../model/jobModel.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Job List</title>
</head>
<body>
    <center>
	   <form action="" method="post">
	        <input type="text" name="search_name" placeholder="search by job name">
	        <input type="submit" name="search" value="Search">
	   </form>
    </center>
	
	<table border="1" align="center">
		<tr>
			<th> Company Name: </th>
			<th> Job Title </th>
			<th> Salary </th>
			<th> Date </th>
			<th colspan="2">Action</th>
			
    <?php  
		$result = getAllUsers();
		while ($data = mysqli_fetch_assoc($result)) {			
	?>
		<tr>
			<td><?=$data['company_name']?></td>
			<td><?=$data['job_title']?></td>
			<td><?=$data['salary']?></td>
			<td><?=$data['date']?></td>
			<td>
			    <a href="../views/addjob.html"> ADD</a> | 
				<a href="../views/applyjob.php"> APPLY</a> |
				<a href="editjob.php?id=<?=$data['id']?>"> EDIT</a> | 
				<a href="deletejob.php?id=<?=$data['id']?>"> DELETE</a> 
			</td>
		</tr>
	<?php 
}
	?>	
		
	</table>
</body>
</html>