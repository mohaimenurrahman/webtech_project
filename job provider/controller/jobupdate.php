<?php 
	require_once('../model/jobModel.php');

	$company_name 	= $_REQUEST['company_name'];
	$job_title 	= $_REQUEST['job_title'];
	$salary 		= $_REQUEST['salary'];
	$date 		= $_REQUEST['date'];
	$id 		= $_REQUEST['id'];

	$user = ['id'=>$id, 'company_name'=>$company_name, 'job_title'=>$job_title, 'salary'=>$salary, 'date'=>$date];
	$status = editUser($user);

	if($status){
		header('location: ../views/joblist.php');
	}else{
		header('location: ../editjob.php?id='.$id);
	}

?>