<?php 

    require_once('header.php');
    require_once('../model/reviewModel.php');    

    session_start();
?>    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Review Pannel</title>
</head>
<body>
    <center>
        <a href="postedjob.php"> Back |</a> 
        <a href="home.php"> Home |</a> 
        <a href="../controller/logout.php"> Log Out</a>
    </center>
    <br><br><br> 

    <center>
        <input type="text" id="d1" name="mane" value="" onkeyup="ajax()" />
          <input type="button" name="click" value="Search" onclick="ajax()" />
     </center>

     <div id="d2" align="right" width="500">
        
     </div>

     <br><br><br>



    <br> 
    <table border="1" align="center">
        <tr>
            <th>Email</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>    
            
    <?php  
        $result = getAllReviews();
        while ($data = mysqli_fetch_assoc($result)) {           
    ?>
        <tr>
            <td><?=$data['email']?></td>
            <td><?=$data['mane']?></td>
            <td><?=$data['description']?></td>
            <td>
                <a href="../controller/reviewdelete.php?id=<?=$data['id']?>"> DELETE</a> 
            </td>
        </tr>
    <?php 
    
    }//while
    
    //}//if

    ?>  
        
    </table>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="../asset/reviewscript.js"></script>
</body>
</html>