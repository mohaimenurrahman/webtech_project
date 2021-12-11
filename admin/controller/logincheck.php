<?php
	session_start();

	require_once('../model/adminModel.php');

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$type = $_POST['type'];

		//$admin = getAdminsByUserName($username);


		if($username != ""){
			if($password != ""){
				if($_POST['type']!= ""){
					$status = validate($username, $password);
				    if($status){
				        if($type == "admin"){
				           setcookie('flag', 'true', time()+3600, '/');
				           setcookie('loggedInName',$username,time()+3600,'/');
                           setcookie('loggedInPassword',$password,time()+3600,'/');

            
						 //  setcookie('loggedInId',$password,time()+3600,'/');
					       //setcookie('loggedInEmail',$email,time()+3600,'/');
				           //setcookie('loggedInDateOfBirth',$dob,time()+3600,'/');
				           //setcookie('loggedInGender',$gender,time()+3600,'/');
				           //setcookie('loggedInType',$type,time()+3600,'/'); 

				           header('location: ../views/home.php');

				        }else if($_POST['type'] == "placementOfficer"){

					    }else if($_POST['type'] == "jobProvider"){

					    }else{

					    }
				    }else{
					    echo "invalid username/password";
					}    
				}else{
					echo "Missing Type";
				}  
			}else{
				echo "Invalid password...";
			}
		}else{
			echo "Invalid username...";
		}
	}
?>