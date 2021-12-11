<?php 
	require_once('db.php');


	function addUser($user){
		$con = getConnection();
		$sql= "insert into reviews values('','{$user['email']}', '{$user['name']}', '{$user['description']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from reviews";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from reviews where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update reviews set email='{$user['email']}', name='{$user['name']}',description='{$user['description']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from reviews where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>