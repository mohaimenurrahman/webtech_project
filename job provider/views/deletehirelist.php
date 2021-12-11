<?php 

    session_start();
    require_once('../model/hireModel.php');
    $id= $_REQUEST['id'];
    $user = getUsersById($id);

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $result=deleteUser($id);

        if($result)
        {

            header('location:hirelist.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>