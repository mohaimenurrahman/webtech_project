<?php 
	require_once('db.php');


	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from jobseeker";
		$result = mysqli_query($con, $sql);
		return $result;
	}

?>