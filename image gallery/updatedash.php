<?php 
	$did = $_POST['did'];
	$db_name = $_POST['dbname'];
	$db_email = $_POST['dbemail'];
	$db_pass = $_POST['dbpass'];
	$db_cpass = $_POST['dbcpass'];


	$con = new mysqli('localhost','root','','dashboard');
	$query = "UPDATE dash SET dname='$db_name',demail= '$db_email',dpassword= '$db_pass',dconfirmp= '$db_cpass'WHERE d_id= '$did'";
	if ($con->query($query)) {
		header('location: viewdash.php');
	} else {
		echo mysqli_error($con);
	}
 ?>

