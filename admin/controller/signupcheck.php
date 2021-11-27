<?php
	session_start();

	require_once('../model/adminModel.php');

	if(isset($_POST['submit'])){
		
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		
		if($_POST['username'] != ""){
				if($_POST['email'] != ""){
					if($_POST['dob'] != ""){
						if($_POST['gender'] != ""){
				            $admin = [
				            	        'username'=>$username, 
				            	        'password'=>$password, 
				            	        'email'=>$email, 
				            	        'dob'=>$dob, 
				            	        'gender'=>$gender, 
				            	     ];

						    setcookie('loggedInName',$username,time()+3600,'/');
						    setcookie('loggedInId',$password,time()+3600,'/');
						    setcookie('loggedInEmail',$email,time()+3600,'/');
						    setcookie('loggedInDateOfBirth',$dob,time()+3600,'/');
						    setcookie('loggedInGender',$gender,time()+3600,'/');
					//}	     

				            $status = addAdmin($admin);	
				            if($status){
				            	//id=<?=$user['id']
                                header('location: ../views/login.html');
				            }else{
				            	echo "Try again";
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
