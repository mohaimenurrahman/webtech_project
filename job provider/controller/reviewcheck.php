<?php
	session_start();
	require_once('../model/reviewModel.php');

	if(isset($_POST['submit'])){

		$email 	= $_POST['email'];
		$name 	= $_POST['name'];
		$description = $_POST['description'];

		if($_POST['email'] != ""){
			if($_POST['name'] != ""){
				if($_POST['description'] != ""){


					$user = [
								'email'=> $email, 
								'name'=>$name, 
								'description'=> $description, 
								
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/reviewlist.php');
					}else{
						echo "try again...";
					}
					

				}else{
					echo "Invalid description...";
				}	
			}else{
				echo "Invalid job name...";
			}
		}else{
			echo "Invalid company email...";
		}
	}
?>