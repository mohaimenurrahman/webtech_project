<?php 
	require_once('db.php');


	function addUser($user){
		$con = getConnection();
		$sql= "insert into hirelist values('','{$user['name']}', '{$user['address']}', '{$user['email']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from hirelist";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from hirelist where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update hirelist set name='{$user['name']}', address='{$user['address']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from hirelist where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>