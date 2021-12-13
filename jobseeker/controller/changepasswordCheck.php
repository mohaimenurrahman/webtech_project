<?php
    session_start();
    require_once('../model/jobseekerModel.php');

if (isset($_POST['submit'])) {
    $name = $_COOKIE['name'];
	
	$username = $_COOKIE['name'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];

        if ($currentPassword != "") {
            if ($newPassword != "") {
                if ($newPassword == $confirmPassword) {

                echo $currentPassword;
                echo $newPassword;
                echo $currentPassword;

                $status = passwordChange($newPassword);
                    
                if($status){
                     header('location: ../views/profile.php');
                }else{
                    echo "Does not change";
                }
            }else {
                echo "Password do not match";
            }
        } else {
            echo "Put New Password...";
        }
    } else {
        echo "Put Current Password";
    }
}
