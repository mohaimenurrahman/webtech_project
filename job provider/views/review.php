<?php 
  include('../views/header.php');
?>
<html>
<head>
  <title>Review</title>
  <style>
fieldset {
  background-color: #eeeeee;
  width:70px ;
  text-align:center;
 
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
  width:80px;

}

input {
  margin: 10px;
}

textarea {
  resize: none;
}


</style>
</head>
<body>
  
  <form method="post" action="../controller/reviewcheck.php">
    <fieldset>
      <legend>REVIEW</legend>
      <a href="../views/home.php">Back |</a>
      <a href="../controller/logout.php">Logout</a>
      <table>
        <tr>
          <td>Officer Email</td>
          <td><input type="text" name="email" value=""></td>
        </tr>

        <tr>
          <td>Officer Name</td>
          <td><input type="text" name="name" value=""></td>
        </tr>
       
        <tr>
          <td>Description</td>
          <td><textarea id="text" name="description" rows="4" cols="50"></textarea></td>
        </tr>

        <tr>
          <td></td>
          <td align="right"><input type="submit" name="submit" value="Post"></td>
        </tr>
      </table>
      
    </fieldset>
  </form>

</body>
</html>





