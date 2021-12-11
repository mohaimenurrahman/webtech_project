<?php 
    include('header.php');
    require_once('../model/adminModel.php');


    $username = $_COOKIE['loggedInName'];
    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql= "SELECT * FROM `admin` WHERE `username` = '$username'";
    $result = mysqli_query($con, $sql);
    $user = mysqli_fetch_assoc($result);
?>

<html>
<head>
    <title>Edit Profile Information</title>
</head>
<body>
    <center>    
        <a href="home.php">Back </a> |
        <a href="../controller/logout.php"> logout</a>
    </center>

    <form method="post" action="../controller/editprofilecheck.php">
        <fieldset>
            <legend>Edit </legend>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username" value="<?=$user['username']?>"></td>
                </tr>

                <tr>
                    <td>email:</td>
                    <td><input type="email" name="email" value="<?=$user['email']?>"></td>
                </tr>

                <tr>
                    <td>DateOfBirth:</td>
                    <td><input type="text" name="gender" value="<?=$user['gender']?>"></td>
                </tr>

                <tr>
                    <td>Gender:</td>
                    <td><input type="text" name="dateofbirth" value="<?=$user['dateofbirth']?>"></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>