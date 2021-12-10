<?php 
	include('header.php');
	//$id = $_REQUEST['id'];
	//$admin = getAdminsById($id);
	$username = $_COOKIE['loggedInName'];
	//$result = getAdminsByUserName($username);


    $con = mysqli_connect('localhost', 'root', '', 'webtech');
	$sql= "SELECT * FROM `admin` WHERE `username` = '$username'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);

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
				    <td rowspan="5">
				    	<img src="a2.jpg" height="150" width="150"/>	
				    	<a href="changeprofilepicture.html">Upload Pic </a>
				    </td>
               </tr>
               
			    <tr>
                    <td>Email</td>
                   <td><?php echo $user['email'] ?></td>
                </tr>
				
			    <tr>
                    <td>Date Of Birth</td>
                    <td><?php echo $user['gender'] ?></td>
                </tr>

                <tr>
                    <td>Gender</td>
                    <td><?php echo $user['dateofbirth'] ?></td>
                </tr>

                <tr>
                    <td>Type</td>
                    <td><?php echo $user['type'] ?></td>
                </tr>
				
				<tr align="center">
                   <td colspan="3"><a href="editProfile.php">Edit Profile</a></td>
                </tr>
			   
           </table>
           