<?php
session_start();
require_once('../model/adminModel.php');

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

                echo $currentPassword;
                echo $newPassword;
                echo $currentPassword;
                    
                // if($status){
                //     header('location: ../views/profile.php');
                // }else{
                //    echo "Does not change";
                // }
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