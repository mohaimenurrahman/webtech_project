<?php
	session_start();
	require_once('../model/companyModel.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$address 	= $_POST['address'];
		$email 		= $_POST['email'];

		if($_POST['name'] != ""){
			if($_POST['address'] != ""){
				if($_POST['email'] != ""){


					$user = [
								'name'=> $name, 
								'address'=>$address, 
								'email'=> $email, 
								
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/companyprofile.php');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid email...";
				}	
			}else{
				echo "Invalid address...";
			}
		}else{
			echo "Invalid name...";
		}
	}
?>