<?php
	session_start();
	require_once('../model/jobseekerModel.php');

	if(isset($_POST['submit'])){
		$name = $_POST['name'];
		$password = $_POST['password'];

		if($name != ""){
			if($password != ""){
				$status = validate($name, $password);
				if($status){
					setcookie('flag', 'true', time()+3600, '/');
					setcookie('name', $name, time()+3600, '/');
					header('location: ../views/home.php');
				}else{
					echo "Invalid username/password";
				}
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>