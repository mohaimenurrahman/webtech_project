<?php 
	require_once('../model/seekersModel.php');

	$name 	= $_REQUEST['name'];
	$address 	= $_REQUEST['address'];
	$email 		= $_REQUEST['email'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'name'=>$name, 'address'=>$address, 'email'=>$email];
	$status = editUser($user);

	if($status){
		header('location: ../views/hirelist.php');
	}else{
		header('location: ../hireseekers.php?id='.$id);
	}

?>