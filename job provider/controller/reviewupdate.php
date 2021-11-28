<?php 
	require_once('../model/reviewModel.php');

	$email 	= $_REQUEST['email'];
	$name 	= $_REQUEST['name'];
	$description 		= $_REQUEST['description'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'email'=>$email, 'name'=>$name, 'description'=>$description];
	$status = editUser($user);

	if($status){
		header('location: ../views/reviewlist.php');
	}else{
		header('location: ../editreview.php?id='.$id);
	}

?>