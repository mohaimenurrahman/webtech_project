<?php 

    require_once('header.php');
    require_once('../model/companyModel.php');    
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
            <th>Address</th>
            <th>Email</th>
            <th colspan="2">Action</th>
        </tr>    
            
    <?php  
        $result = getAllCompanies();
        while ($data = mysqli_fetch_assoc($result)) {           
    ?>
        <tr>
            <td><?=$data['name']?></td>
            <td><?=$data['address']?></td>
            <td><?=$data['email']?></td>
            <td>
                <a href="message.php?id=<?=$data['id']?>">Email</a> |
                <a href="../controller/companydelete.php?id=<?=$data['id']?>">DELETE</a> 
            </td>
        </tr>
    <?php 
    
         }
 
    ?>  
        
    </table>
</body>
</html>