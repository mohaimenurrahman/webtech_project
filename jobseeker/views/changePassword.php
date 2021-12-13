<?php 
	include('header.php');
?> 
		
            <form method="post" action="../controller/changepasswordCheck.php">
		        <fieldset>
			        <legend> Change Password</legend>
			            <table>
				            <tr>
					            <td> Current Password:</td>
					            <td><input type="text" name="password" value=""></td>
				            </tr>
				            
							<tr>
					            <td> New Password:</td>
					            <td><input type="password" name="newPassword" value=""></td>
				            </tr>
							
							<tr>
					            <td> Confirm New Password:</td>
					            <td><input type="password" name="confirmPassword" value=""></td>
				            </tr>
				            
							<tr>
					            <td><input type="submit" name="submit" value="Change"></td>
				            </tr>
			            </table>
	            	</fieldset>
        </form>