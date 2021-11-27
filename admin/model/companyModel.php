<?php 
	require_once('db.php');

	function addAdmin($company){
		$con = getConnection();
		$sql= "insert into company values(
		                                   '',
		                                   '{$company['name']}', 
		                                   '{$company['address']}', 
		                                   '{$company['email']}'
		                               )";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function getCompanyById($id){
		$con = getConnection();
		$sql= "select * from admin where id={$id}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllCompanies(){
		$con = getConnection();
		$sql= "select * from company";
		$result = mysqli_query($con, $sql);
		return $result;
	}

	function editCompany($company){
		$con = getConnection();
		$sql= "update company set username='{$company['name']}', 
		                                    password='{$company['address']}', 
		                                    email='{$company['email']}' 
		                                    where id={$user['id']}
		                                    ";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

	function deleteCompany($id){
		$con = getConnection();
		$sql= "delete from company where id={$id}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

?>