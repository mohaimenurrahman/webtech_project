<?php
session_start();

if (isset($_POST['submit'])) {
    //$name = $_COOKIE['loggedInName'];
    //$id = $_COOKIE['loggedInId'];
	
	$username = $_COOKIE['loggedInName'];
    $currentPassword = $_POST['password'];
    $newPassword = $_POST['newPassword'];
    $confirmNewPassword = $_POST['confirmNewPassword'];

    if ($currentPassword != "") {
        if ($newPassword != "") {
            if ($newPassword == $confirmNewPassword) {
                $validInfo = false;
                
                    $user = ['password'=>$newPassword];
                    $status = passwordChange($user);

                    if($status){
                        header('location: ../views/profile.php');
                    }else{
                       echo "Does not change";
                    }
            }else {
                echo "New Password and Confirm Password do not match";
            }
        } else {
            echo "Fill New Password...";
        }
    } else {
        echo "Fill Current Password";
    }
}