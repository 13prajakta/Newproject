<?php 
	$reid = $_POST['rid'];
	$i_password = $_POST['password'];
	$i_rpassword = $_POST['rpassword'];
	

	$con = new mysqli('localhost','root','','ig');
	$query = "UPDATE image SET igpassword= '$i_password',igrpassword= '$i_rpassword' WHERE i_id= '$reid'";
	if ($con->query($query)) {
		header('location: login.php');
	} else {
		echo mysqli_error($con);
	}
 ?>

