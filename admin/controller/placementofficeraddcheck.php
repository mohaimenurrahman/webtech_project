<?php
	session_start();

	require_once('../model/placementofficerModel.php');

	if(isset($_POST['submit'])){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$dateofbirth=$_POST['dateofbirth'];
		$gender=$_POST['gender'];
		$type=$_POST['type'];
		$salary=$_POST['salary'];
		
		if($_POST['username'] != ""){
				if($_POST['email'] != ""){
					if($_POST['gender'] != ""){
						if($_POST['dateofbirth'] != ""){ 
							if($_POST['type']!= ""){
								if($_POST['salary'] != ""){
									
									$admin = [
				            	        'username'=>$username, 
				            	        'password'=>$password, 
				            	        'email'=>$email, 
				            	        'gender'=>$gender,
				            	        'dateofbirth'=>$dateofbirth,
				            	        'type'=>$type,
				            	        'salary'=>$salary, 
				            	    ];

				                    $status = addPlacementOfficer($admin);	
				                    if($status){
                                        header('location: ../views/placementofficerlist.php');
				                    }else{
				            	        echo "Try again";
				                    }

								}else{
                                    echo " Missing salary...";
								}
								 
							}else{
								echo " Missing type..."; 
							}

						}else{
                             echo " Select gender..."; 
						}
					}else{
					    echo "Invalid date of birth..."; 	
					}
					
				}else{
					echo "Invalid email...";
				}	
				
		}else{
			echo "Invalid username...";
		}
		
	}
?>
