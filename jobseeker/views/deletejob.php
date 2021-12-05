<?php 
	require_once('../model/jobModel.php');

	$id = $_REQUEST['id'];

	
	$status = deleteUser($id);
	
	if($status){
		header('location: ../views/joblist.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}
	
?>

