<?php 

	$iname = $_POST['name'];
	$icontact = $_POST['contact'];
	$iemail = $_POST['email'];
	$ipassword = $_POST['password'];
	$irpassword = $_POST['rpassword'];
	$iaddress = $_POST['address'];
	$iRadio = $_POST['Radio'];
	$ivalid = $_POST['valid'];
	

	$con = new mysqli('localhost','root','','ig');
	$query = "INSERT INTO image VALUES(NULL,'$iname','$icontact','$iemail','$ipassword','$irpassword','$iaddress','$iRadio','$ivalid')";
	if ($con->query($query)) {
		header('location: login.php');
	} else {
		echo mysqli_error($con);
	}
 ?>
