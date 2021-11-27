<?php 

    session_start();
    require_once('../model/usersModel.php');
    $id= $_REQUEST['id'];
    $user = getUsersById($id);

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $result=deleteUser($id);

        if($result)
        {

            header('location:userlist.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>