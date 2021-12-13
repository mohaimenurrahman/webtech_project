<?php 
    include('header.php');
    require_once('../model/placementofficerModel.php');

    $id = $_REQUEST['id'];
    $officer = getPlacementOfficerById($id);

?>

<html>
<head>
    <title>Placement Officer Salary</title>
</head>
<body>
    <center>    
        <a href="home.php">Back </a> |
        <a href="../controller/logout.php"> logout</a>
    </center>

    <form method="post" action="../controller/placementofficereditcheck.php">
        <fieldset>
            <legend>Edit Salary</legend>
            <table>

                <tr>
                    <td>Old Salary:</td>
                    <td> <?=$officer['salary']?> </td>
                </tr>

                 <tr>
                    <td>New Salary:</td>
                    <td><input type="text" name="salary" value=""></td>
                </tr>

                <tr>
                    <td><input type="hidden" name="id" value="<?=$officer['id']?>"></td>
                    <td><input type="submit" name="submit" value="Update"></td>
                </tr>

            </table>
        </fieldset>
    </form>
</body>
</html>