<?php 
	require_once('db.php');


	function addPlacementOfficer($admin){
		$con = getConnection();
		$sql= "insert into placementofficer values(
		                                   '',
		                                   '{$admin['username']}', 
		                                   '{$admin['password']}', 
		                                   '{$admin['email']}',  
		                                   '{$admin['gender']}',
		                                   '{$admin['dateofbirth']}',
		                                   '{$admin['type']}',
		                                   '{$admin['salary']}'
		                               )";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getPlacementOfficerById($id){
		$con = getConnection();
		$sql= "select * from placementofficer where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getPlacementOfficerByUserName($username){
		$con = getConnection();
		$sql= "select * from placementofficer where username={$username}";
		//$sql="SELECT * FROM `placementofficer` WHERE `username` = {$username}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllPlacementOfficer(){
		$con = getConnection();
		$sql= "select * from placementofficer";
		$result = mysqli_query($con, $sql);
		return $result;
	}


	function editPlacementOfficer($user){
		$con = getConnection();
		$sql= "update placementofficer set salary='{$user['salary']}'
		                      where id={$user['id']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deletePlacementOfficer($id){
		$con = getConnection();
		$sql= "delete from placementofficer where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>