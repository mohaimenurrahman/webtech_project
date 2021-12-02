<?php
	session_start();
	require_once('../model/jobseekerModel.php');

	if(isset($_POST['submit'])){

		$name 	= $_POST['name'];
		$password 	= $_POST['password'];
		$email 	= $_POST['email'];
		$gender = $_POST['gender'];
		$dateofbirth = $_POST['dateofbirth'];
		$address = $_POST['address'];
		$mobile = $_POST['mobile'];
		$type = $_POST['type'];

		if($_POST['name'] != ""){
			if($_POST['password'] != ""){
				if($_POST['email'] != ""){
					if($_POST['gender'] != ""){
                        if($_POST['dateofbirth'] != ""){
				            if($_POST['address'] != ""){
                                if($_POST['mobile'] != ""){
                                	if($_POST['type'] != ""){

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

							             $status = addUser($jobseeker);

							             if($status){
									          header('location: ../views/login.html');
				                         }else{
								             echo "try again...";
								         }  
                                	}else{
                                		echo "Invalid type...";
                                	}
							    }else{
					                echo "Invalid mobile...";
					            }    
			                }else{
				                echo "Invalid address...";
				            }    
			            }else{
			                echo "Invalid dateofbirth..."; 
			            }    
		            }else{
			             echo "Invalid gender...";
			        } 
			    }else{
			    	echo "Invalid email...";
			    }            
            }else{
                echo "Invalid password...";
            }    
        }else{
        	echo "Invalid name";
        }	
	}
?>











$jobseeker= [
										'username'=>$username, 
										'password'=>$password, 
										'gender'=>$gender, 
										'address'=>$address, 
										'email'=>$email, 
										'mobile'=>$mobile 
									    ];

							        $status = addJobseeker($jobseeker);

							        if($status){
									    header('location: ../views/login.html');
				                    }else{
								         echo "try again...";
								    }     