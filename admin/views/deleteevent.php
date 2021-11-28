<?php 

    session_start();
    require_once('../model/eventModel.php');
    $id= $_REQUEST['id'];
    $user = getUsersById($id);

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $result=deleteUser($id);

        if($result)
        {

            header('location: eventlist.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>