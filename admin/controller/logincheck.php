<?php
	session_start();

	require_once('../model/adminModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		if($username != ""){
			if($password != ""){

               $status = validate($username, $password);
				
				if($status){
				    setcookie('flag', 'true', time()+3600, '/');
				    //setcookie('loggedInName',$username,time()+3600,'/');
                    //setcookie('loggedInId',$username,time()+3600,'/');
				    header('location: ../views/home.php');
				}else{
					echo "invalid username/password";
				}
                
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>