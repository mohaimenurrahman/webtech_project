<?php 
	require_once('../model/companyModel.php');

	$name 	= $_REQUEST['name'];
	$address 	= $_REQUEST['address'];
	$email 		= $_REQUEST['email'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'name'=>$name, 'address'=>$address, 'email'=>$email];
	$status = editUser($user);

	if($status){
		header('location: ../views/companyprofile.php');
	}else{
		header('location: ../editcompany.php?id='.$id);
	}

?>