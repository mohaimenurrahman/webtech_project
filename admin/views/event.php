<?php 
  include('../views/header.php');
?>
<html>
<head>
     <Title>Event</Title>

</head>
<body>

     <center>
            <a href="../views/home.php">Back |</a>
            <a href="../views/home.php">Home |</a>
            <a href="../controller/logout.php">Logout</a>
     </center>
  
     <form method="post" action="../controller/eventcheck.php" onsubmit="return validateForm()">
     
     <fieldset>
          <legend>Adding Event</legend>
               <table>
                     <tr>
                         <td>Event Name</td>
                         <td><input type="text" id="namee" name="name" value=""></td>
                      </tr>
                      
                      <tr>
                          <td>Date</td>
                          <td><input type="date" id="datee" name="date" value=""><br></td>
                      </tr>
       
                      <tr>
                          <td>Description</td>
                          <td><textarea id="descriptionn" name="description"></textarea></td>
                      </tr>

                      <tr>
                          <td></td>
                          <td align="right"><input type="submit" name="submit" value="Post"></td>
                      </tr>
                </table>
      
    </fieldset>
    </form>

    <script type="text/javascript" src="../asset/addeventscript.js"></script>

</body>
</html>