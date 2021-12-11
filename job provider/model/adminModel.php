<?php 
	require_once('db.php');


	function validate($username, $password){
		$con = getConnection();
		$sql= "select * from provider where username='{$username}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$admin = mysqli_fetch_assoc($result);

		if($admin){
			return true;
		}else{
			return false;
		}
	}

	function addAdmin($admin){
		$con = getConnection();
		$sql= "insert into provider values(
		                                   '',
		                                   '{$admin['username']}', 
		                                   '{$admin['password']}', 
		                                   '{$admin['email']}',  
		                                   '{$admin['gender']}',
		                                   '{$admin['dateofbirth']}',
		                                   '{$admin['type']}'
		                               )";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getAdminsById($id){
		$con = getConnection();
		$sql= "select * from provider where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAdminsByUserName($username){
		$con = getConnection();
		//$sql= "select * from admin where username={$username}";
		$sql="SELECT * FROM provider WHERE username = {$username}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllAdmins(){
		$con = getConnection();
		$sql= "select * from provider";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function editAdmin($user){
		$con = getConnection();
		$sql= "update provider set username='{$user['username']}', 
		                      email='{$user['email']}' , 
		                      dateofbirth='{$user['dateofbirth']}' , 
		                      gender='{$user['gender']}' 
		                      where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	function passwordChange($user){
		$con = getConnection();
		$sql= "update provider set password='{$user['password']}' where username={$user['username']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	

?>