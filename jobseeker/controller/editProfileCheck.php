<?php 
	require_once('../model/jobseekerModel.php');

        $name 	= $_POST['name'];
		$password 	= $_POST['password'];
		$email 	= $_POST['email'];
		$gender = $_POST['gender'];
		$dateofbirth = $_POST['dateofbirth'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$type = $_POST['type'];

        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql= "SELECT * FROM `jobseeker` WHERE `username` = '$name'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);

        $id = $data['id'];

        $jobseeker= [
            'name'=>$name, 
            'password'=>$password, 
            'email'=>$email, 
            'gender'=>$gender, 
            'dateofbirth'=>$dateofbirth, 
            'address'=>$address, 
            'mobile'=>$mobile,
            'type'=>$type  
         ];

         $status = editjobseeker($user);

         if($status){
            header('location: ../views/profile.php');
        }else{
            header('location: ../editProfile.php?id='.$id);
        }
?>