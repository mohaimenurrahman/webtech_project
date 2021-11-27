<?php 
	require_once('db.php');

	function getJobById($id){
		$con = getConnection();
		$sql= "select * from reviews where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllReviews(){
		$con = getConnection();
		$sql= "select * from reviews";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	

	

?>