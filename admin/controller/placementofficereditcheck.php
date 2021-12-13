<?php 
	require_once('../model/placementofficerModel.php');

	
	$salary = $_REQUEST['salary'];

	$user = ['salary'=>$salary];
	$status = editPlacementOfficer($user);

	if($status){
		header('location: ../views/placementofficerlist.php');
	}else{
		header('location: ../views/placementofficeredit.php?id='.$id);
	}

?>