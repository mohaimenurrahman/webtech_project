<?php 
	include('header.php');
	//$id = $_REQUEST['id'];
	//$admin = getAdminsById($id);
	$username = $_COOKIE['loggedInName'];
	//$result = getAdminsByUserName($username);

?>         
            <table align="center">
	            <tr> 
		            <th> 
			            <a href="home.php"> Back |</a> 
			            <a href="home.php"> Home |</a> 
				        <a href="../controller/logout.php"> Log Out</a>
			        </th> 
		        </tr>
	        </table>
			
			<br>
			<br>
			<br>
             
            <table align="center" border="1">
               <tr>
                   <th colspan="2">Profile</th>
                   <th>Profile Picture</th>
               </tr>
               <tr>
                    <td>NAME</td>
                    <td><?php echo $_COOKIE['loggedInName'] ?></td>
				    <td rowspan="6">
						<img src="../asset/upload/<?=$_SESSION['profile']?>" width="100px" height="100px">
				    </td>
               </tr>
               
			    <tr>
                    <td>Email</td>
                   <td><?php echo $_COOKIE['loggedInEmail'] ?></td>
                </tr>
				
				<tr>
                    <td>Id</td>
                    <td><?php echo $_COOKIE['loggedInId'] ?></td>
                </tr>
			   
			    <tr>
                    <td>Date Of Birth</td>
                    <td><?php echo $_COOKIE['loggedInDOB'] ?></td>
                </tr>
				
               
			    <tr>
                   <td colspan="2"><a href="changepassword.php">Change Password</a></td>
                </tr>
			   
			    <tr>
                    <td colspan="2"><a href="changeprofilepicture.html">Change Profile Picture</a></td>
                </tr>
				
				<tr align="center">
                   <td colspan="3"><a href="edit.php">Edit Profile</a></td>
                </tr>
			   
           </table>
           