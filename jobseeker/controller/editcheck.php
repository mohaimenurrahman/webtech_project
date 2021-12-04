<?php 
	require_once('../model/jobseekerModel.php');

	$id = $_REQUEST['id'];
	$company_name = $_REQUEST['company_name'];
	$job_title	= $_REQUEST['job_title'];
	$salary = $_REQUEST['salary'];
    $date = $_REQUEST['date'];


	$job = ['id' => $id,'company_name' => $company_name, 'job_title' => $job_title, 'salary'=>$salary, 'date'=>$date];
	
	$status = editUser($job);

	if($status){
		header('location: ../views/joblist.php');
	}else{
		header('location: ../edit.php?id='.$id);
	}

?>