<?php 
	
	require_once('../model/usersModel.php');

	$id = $_REQUEST['id'];
	$user = getUsersById($id);
	//print_r($user);
?>

<html>
<head>
	<title>Reset Password</title>
	<style>
fieldset {
 background-color: #eeeeee;

  text-align:center;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 10px;
}
</style>
</head>
<body>
	

	<form method="post" action="../controller/userUpdate.php">
		<fieldset>
			<legend>Edit </legend>
			<div style="text-align:right;"><a href="home.php">Back </a> | <a href="../controller/logout.php" >Logout</a></div>
			<table>
				
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value="<?=$user['id']?>"></td>
					<td><input type="submit" name="submit" value="Reset"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>