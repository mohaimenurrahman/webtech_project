<?php 

    require_once('header.php');
    require_once('../model/adminModel.php');    
    session_start();
?>    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Admin List</title>
</head>
<body>
    <center>
        <a href="home.php"> Back |</a> 
        <a href="home.php"> Home |</a> 
        <a href="../controller/logout.php"> Log Out</a>
    </center>
    <br><br><br> 
 
    <table border="1" align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>    
            
    <?php  
        $result = getAllAdmins();
        while ($data = mysqli_fetch_assoc($result)) {           
    ?>
        <tr>
            <td><?=$data['username']?></td>
            <td><?=$data['email']?></td>
            <td> Message </td>
        </tr>
    <?php 
    
    }//while
    
    //}//if

    ?>  
        
    </table>

     <script type="text/javascript" src="script.js"></script>
</body>
</html>