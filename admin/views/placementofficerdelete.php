<?php 

    session_start();
    require_once('../model/placementOfficerModel.php');
    $id= $_REQUEST['id'];
    $user = getPlacementOfficerById($id);

    if(isset($_GET['id']))
    {
        $id=$_GET['id'];

        $result=deletePlacementOfficer($id);

        if($result)
        {

            header('location: placementofficerlist.php');
        }
        else
        {
            echo"error";
        }
        
    }

?>