<?php 
	$id = $_POST['id'];
	$i_name = $_POST['name'];
	$i_contact = $_POST['contact'];
	$i_email = $_POST['email'];
	$i_password = $_POST['password'];
	$i_rpassword = $_POST['rpassword'];
	$i_address = $_POST['address'];
	$i_Radio = $_POST['Radio'];
	$i_valid = $_POST['valid'];
	

	$con = new mysqli('localhost','root','','ig');
	$query = "UPDATE image SET igname='$i_name',igcontact= '$i_contact',igemail= '$i_email',igpassword= '$i_password',igrpassword= '$i_rpassword',igaddress= '$i_address',igradio= '$i_Radio',igvalid= '$i_valid'WHERE i_id= '$id'";
	if ($con->query($query)) {
		header('location: view.php');
	} else {
		echo mysqli_error($con);
	}
 ?>

