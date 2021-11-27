<?php 
	require_once('db.php');

	function getJobById($id){
		$con = getConnection();
		$sql= "select * from job where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllJobs(){
		$con = getConnection();
		$sql= "select * from job";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	

?>