<?php 

	$id=$_GET['id'];
	$con= new mysqli('localhost','root','','ig');
	$query= "DELETE FROM image WHERE im_id=$id";
	if ($con->query($query)) {
		header('location: viewi.php');
	} else {
		echo mysqli_error($con);
	}

 ?>