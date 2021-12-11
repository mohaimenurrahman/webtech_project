<?php 
	require_once('db.php');

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from jobProvider";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from jobProvider where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from jobProvider where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>