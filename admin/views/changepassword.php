<?php 
	include('header.php');
?> 
    <table align="center">
	        <tr> 
		        <th> 
			        <a href="profile.php"> Back |</a> 
			        <a href="home.php"> Home |</a> 
				    <a href="../controller/logout.php"> Log Out</a>
			    </th> 
		    </tr>
	    </table>
		
            <form method="post" action="../controller/changepasswordcheck.php">
		        <fieldset>
			        <legend>ChangePassword</legend>
			            <table>
				            <tr>
					            <td>Current Password:</td>
					            <td><input type="text" name="password" value=""></td>
				            </tr>
				            
							<tr>
					            <td>New Password:</td>
					            <td><input type="password" name="newPassword" value=""></td>
				            </tr>
							
							<tr>
					            <td>Retype New Password:</td>
					            <td><input type="password" name="confirmNewPassword" value=""></td>
				            </tr>
				            
							<tr>
					            <td><input type="submit" name="submit" value="Change"></td>
				            </tr>
			            </table>
	            	</fieldset>

        </form>