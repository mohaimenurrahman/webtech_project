<?php 
  include('../views/header.php');
?>
<html>
<head>
  <title>Email</title>
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
  
  <form method="post" action="../controller/emailcheck.php">
    <fieldset>
      <legend>EMAIL</legend>
      <a href="../views/job seekers.php">Back |</a>
      <a href="../controller/logout.php">Logout</a>
      <table>
        <tr>
          <td>Email Address</td>
          <td><input type="text" name="email" value=""></td>
        </tr>
        <tr>
          <td>Subject</td>
          <td><input type="text" name="subject" value=""></td>
        </tr>
        <tr>
          <td>Description</td>
          <td><textarea id="text" name="description" rows="10" cols="60"></textarea></td>
        </tr>

        <tr>
          <td></td>
          <td align="right"><input type="submit" name="submit" value="Email"> </td>
        </tr>
      </table>
      
    </fieldset>
  </form>

</body>
</html>





