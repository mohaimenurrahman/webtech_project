<?php 
  
  require_once('header.php')
?>

<!DOCTYPE html>

<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>
  <style>


h3 {
  background-color: black;
  color: white;
  
}

.header {
  padding:10px;
  text-align: center;
  background: #1abc9c;
  color: white;
  font-size: 30px;
}


.topnav {
  background-color: #333;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

</style>
</head>
<body>
  
  
<div style="text-align:center;">
  <form method="post" action="../controller/logincheck.php">
    <fieldset>
    
      <div class="header">
      <h1>WELCOME HOME!</h1></div>

      <div class="topnav">
            <a class="active" href="../views/home.php">HOME</a>
            <a href="../views/seekerslist.php">JOB SEEKERS</a>
            <a href="../views/companyprofile.php">COMPANY</a>
            <a href="../views/joblist.php">JOB</a>
            <a href="../views/hirelist.php">HIRE</a>
            <a href="../views/reviewlist.php">REVIEW</a>
            <a href="../views/eventlist.php">EVENT</a>
            <a href="../controller/logout.php">LOGOUT</a>
      </div>
      <img src="../asset/home.png" width="100%" height="100%">
      <br>
      <br><br>
      <a class="active" href="../views/home.php"><i class="glyphicon glyphicon-user"style="font-size:18px;"></i></a>
      <a href="../views/reviewlist.php"><i class="glyphicon glyphicon-envelope" style="font-size:18px;"></i></a>
      <a href="../views/eventlist.php"><i class="glyphicon glyphicon-thumbs-up" style="font-size:18px;"></i></a>
      <a href="../controller/logout.php"><i class="glyphicon glyphicon-remove" style="font-size:18px;"></i></a>

      <div style="text-align:center; font-size:20px; "><a href="../views/aboutus.html">About Us </a> | <a href="../views/teams.html" > Terms of Service</a> | <a href="../views/contact.html" > Contact Us</a></div>
      <p align="center" > © Copyright 2021 | Job Provider | All right reversed.</p>
    </fieldset>
  </form>
</div>
</body>
</html>