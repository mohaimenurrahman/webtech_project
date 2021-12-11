<?php 
	require_once('../model/adminModel.php');

	$username 	= $_REQUEST['username'];
	$email 		= $_REQUEST['email'];
	$dateofbirth = $_REQUEST['dateofbirth'];
	$gender = $_REQUEST['gender'];
	$profilepic = $_REQUEST['profilepic'];


	$con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "SELECT * FROM `admin` WHERE `username` = '$username'";
	$result = mysqli_query($con, $sql);
	$data = mysqli_fetch_assoc($result);

	$id = $data['id'];


	$user = ['username'=>$username,'email'=>$email, 'dateofbirth'=>$dateofbirth, 'gender'=>$gender];
	$status = editAdmin($user);

	if($status){
		header('location: ../views/profile.php');
	}else{
		header('location: ../editProfile.php?id='.$id);
	}




?>