<?php 

    require_once('header.php');
	require_once('../model/placementOfficerModel.php');
	
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Placement Officer List</title>
</head>
<body>
    <center>
        <a href="home.php"> Back |</a> 
        <a href="home.php"> Home |</a> 
        <a href="../controller/logout.php"> Log Out</a>
    </center>
    <br><br><br> 
    
    <center>
    <a href="placementofficeradd.php"> Add Placement Officer</a>
    </center>

    <br><br><br> 

    <center>
        <input type="text" id="d1" name="name" placeholder="Search By Name" value="" onkeyup="ajax()" />
          <input type="button" name="click" value="Search" onclick="ajax()" />
     </center>

         
     <div id="d2" align="right" width="500">
        
     </div>
     
     <br>
 
    <table border="1" align="center">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Salary</th>
            <th colspan="2">Action</th>
        </tr>    
            
    <?php  
        $result = getAllPlacementOfficer();
        while ($data = mysqli_fetch_assoc($result)) {           
    ?>
        <tr>
            <td><?=$data['username']?></td>
            <td><?=$data['email']?></td>
            <td><?=$data['salary']?></td>
            <td> 
                <a href="mail.php">Mail</a> | 
                <a href="placementofficeredit.php?id=<?=$data['id']?>"> SALARY</a> |
                <a href="placementofficerdelete.php?id=<?=$data['id']?>"> DELETE</a>
            </td>
        </tr>
    <?php 
    }
    ?>  
        
    </table>

    <script type="text/javascript" src="../asset/placementofficerscript.js"></script>
</body>
</html>