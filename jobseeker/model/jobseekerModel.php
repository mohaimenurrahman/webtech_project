<?php 
	require_once('db.php');


	function validate($name, $password){
		$con = getConnection();
		$sql= "select * from jobseeker where name='{$name}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

	function addUser($user){
		$con = getConnection();
		$sql= "insert into jobseeker values('','{$user['name']}', 
		                                     '{$user['password']}', 
		                                     '{$user['email']}', 
		                                     '{$user['gender']}', 
		                                     '{$user['dateofbirth']}', 
		                                     '{$user['address']}', 
		                                     '{$user['mobile']}', 
		                                     '{$user['type']}'
		                                     )";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAllUsers(){
		$con = getConnection();
		$sql= "select * from users";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function getUsersById($id){
		$con = getConnection();
		$sql= "select * from users where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function editUser($user){
		$con = getConnection();
		$sql= "update users set username='{$user['username']}', password='{$user['password']}', email='{$user['email']}' where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteUser($id){
		$con = getConnection();
		$sql= "delete from users where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>