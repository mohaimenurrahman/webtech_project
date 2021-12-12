<?php 
	include('header.php');
	$name = $_COOKIE['name'];

    $con = mysqli_connect('localhost', 'root', '', 'webtech');
    $sql= "SELECT * FROM `jobseeker` WHERE `name` = '$name'";
	$result = mysqli_query($con, $sql);
	$user = mysqli_fetch_assoc($result);
?>         
            <table align="center">
                <th> 
			        <a href="home.php"> Back |</a> 
			        <a href="home.php"> Home |</a> 
				    <a href="../controller/logout.php"> Logout</a>
			    </th> 
	            <tr> 
                    <td rowspan="4">
				    	<img src="" height="150" width="150"/>	
				    	<a href="changepicture.html"> Upload Picture </a>
				    </td>
		        </tr>
	        </table>
			<br>
             
            <table align="center" border="1">
               <tr>
                   <th colspan="2">Profile</th>
               </tr>

               <tr>
                    <td>Name:</td>
                    <td><?php echo $_COOKIE['name'] ?></td>
               </tr>
			    <tr>
                    <td>Email:</td>
                   <td><?php echo $user['email'] ?></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><?php echo $user['gender'] ?></td>
                </tr>
			    <tr>
                    <td>Date Of Birth:</td>
                    <td><?php echo $user['dateofbirth'] ?></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><?php echo $user['address'] ?></td>
                </tr>
                <tr>
                    <td>Mobile:</td>
                    <td><?php echo $user['mobile'] ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?php echo $user['type'] ?></td>
                </tr>
				
				<tr align="center">
                   <td colspan="2"><a href="editProfile.php">Edit Profile</a></td>
                </tr>		   
           </table>