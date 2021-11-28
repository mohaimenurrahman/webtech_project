<?php
	session_start();
	require_once('../model/eventModel.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$date	= $_POST['date'];
		$description = $_POST['description'];

		if($_POST['name'] != ){
			if($_POST['date'] != ){
				if($_POST['description'] != ){


					$user = [
								'name'= $name, 
								'date'=$date, 
								'description'= $description
								
							];
							
					$status = addUser($user);

					if($status){
						header('location ..viewseventlist.php');
					}else{
						echo try again...;
					}
					

				}else{
					echo Invalid date...;
				}	
			}else{
				echo Invalid name...;
			}
		}else{
			echo Invalid description...;
		}
	}
