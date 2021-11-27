<?php 
	require_once('../model/companyModel.php');

	$id = $_REQUEST['id'];
	
	$status = deleteCompany($id);
	
	if($status){
		header('location: ../views/company.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}
	
?>

