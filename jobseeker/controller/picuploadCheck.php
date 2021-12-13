<?php
	session_start();

	if(isset($_POST['submit'])){

		$des = $_FILES['myfile']['name'];
	    $src = $_FILES['myfile']['tmp_name'];
	    if(move_uploaded_file($src, "../asset/".$des)){
	    	header('location: ../views/successfulUpload.php'); 
	    }else{
	    	echo "Try again";
	    }
	}
?>