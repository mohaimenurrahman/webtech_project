<?php 
	require_once('../model/eventModel.php');

	$name 	= $_REQUEST['name'];
	$date 	= $_REQUEST['date'];
	$description 		= $_REQUEST['description'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'name'=>$name, 'date'=>$date, 'description'=>$description];
	$status = editUser($user);

	if($status){
		header('location: ../views/eventlist.php');
	}else{
		header('location: ../editevent.php?id='.$id);
	}

?>