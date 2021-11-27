<?php 
	require_once('../model/reviewModel.php');

	$id = $_REQUEST['id'];
	
	$status = deleteReviews($id);
	
	if($status){
		header('location: ../views/reviewlist.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}
	
?>

