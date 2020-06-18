<?php 
	/*echo "<pre>";
	print_r($_POST);
	print_r($_FILES);
	exit();*/

	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_tmp_name = $_FILES['image']['tmp_name'];

	$destination = "uploads/". $image_name ;
	

	$con = new mysqli('localhost','root','','igimage');

	$query = "INSERT INTO upi VALUES (NULL,'$image_name','$destination')";

	if (move_uploaded_file($image_tmp_name, $destination)) {
		if ($con->query($query)) {
		header('location:images.php');
	} else {
		echo mysql_error($con);
	}
	} else {
		echo "image hasn't uploaded";
	}
	
?>