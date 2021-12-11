<?php
	session_start();
	require_once('../model/jobModel.php');

	if(isset($_POST['submit'])){

       
		$company_name = $_POST['company_name'];
		$job_title = $_POST['job_title'];
		$salary = $_POST['salary'];
        $date = $_POST['date'];

 
		if($_POST['company_name'] != ""){
			if($_POST['job_title'] != ""){
				if($_POST['salary'] != ""){
                    if($_POST['date'] != ""){


					$user = [
                                
								'company_name'=> $company_name, 
								'job_title'=>$job_title, 
								'salary'=> $salary, 
								'date'=> $date, 
							];
							
					$status = addUser($user);

					if($status){
						header('location: ../views/joblist.php');
					}else{
						echo "try again...";
					}
					
                    }else{
					    echo "Last date expired ...";
                    }
				}else{
					echo "Invalid salary...";
				}	
			}else{
				echo "Invalid job title...";
			}
		}else{
			echo "Invalid company name...";
		}
	}
?>