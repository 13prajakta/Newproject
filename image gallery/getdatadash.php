<?php 

	$d_name = $_POST['dbname'];
	$d_email = $_POST['dbemail'];
	$d_pass = $_POST['dbpass'];
	$d_cpass = $_POST['dbcpass'];

	$con = new mysqli('localhost','root','','dashboard');
	$query = "INSERT INTO dash VALUES(NULL,'$d_name','$d_email','$d_pass','$d_cpass')";
	if ($con->query($query)) {
		header('location: logindash.php');
	} else {
		echo mysqli_error($con);
	}
 ?>
