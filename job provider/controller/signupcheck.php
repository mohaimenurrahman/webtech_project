<?php
	session_start();

	require_once('../model/adminModel.php');

	if(isset($_POST['submit'])){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$dateofbirth=$_POST['dateofbirth'];
		$gender=$_POST['gender'];
		$type=$_POST['type'];
		
		if($_POST['username'] != ""){
				if($_POST['email'] != ""){
					if($_POST['gender'] != ""){
						if($_POST['dateofbirth'] != ""){ 
							if($_POST['type']!= ""){
								if($type == "jobProvider"){
									
									$provider = [
				            	        'username'=>$username, 
				            	        'password'=>$password, 
				            	        'email'=>$email, 
				            	        'gender'=>$gender,
				            	        'dateofbirth'=>$dateofbirth,
				            	        'type'=>$type, 
				            	    ];

  
				                    $status = addAdmin($provider);	
				                    if($status){
                                        header('location:../views/login.html');
				                    }else{
				            	        echo "Try again";
				                    }

								}else if($_POST['type'] == "placementOfficer"){

								}else if($_POST['type'] == "admin"){

								}else{

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
