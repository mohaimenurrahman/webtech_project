<html>
<head>
	<title>Add Review</title>
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

	<form method="post" action="../controller/reviewcheck.php">
		<fieldset>
			<legend>Add Review</legend>
			<div style="text-align:right;"><a href="home.php">Back </a> | <a href="../controller/logout.php" >Logout</a></div>
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