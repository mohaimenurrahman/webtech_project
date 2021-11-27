<?php 

    require_once('header.php');
    require_once('../model/jobModel.php');    

    session_start();
?>    

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Job List</title>
</head>
<body>
    <center>
        <a href="postedjob.php"> Back |</a> 
        <a href="home.php"> Home |</a> 
        <a href="../controller/logout.php"> Log Out</a>
    </center>
    <br><br><br> 



    <br> 
    <table border="1" align="center">
        <tr>
            <th>Company Name</th>
            <th>Job Title</th>
            <th>Salary</th>
            <th>Last Date</th>
            <th>Action</th>
        </tr>    
            
    <?php  
        $result = getAllJobs();
        while ($data = mysqli_fetch_assoc($result)) {           
    ?>
        <tr>
            <td><?=$data['company_name']?></td>
            <td><?=$data['job_title']?></td>
            <td><?=$data['salary']?></td>
            <td><?=$data['date']?></td>
            <td>
                <a href="../controller/deletejob.php?id=<?=$data['id']?>"> DELETE</a> 
            </td>
        </tr>
    <?php 
    
    }//while
    
    //}//if

    ?>  
        
    </table>

     <script type="text/javascript" src="script.js"></script>
</body>
</html>