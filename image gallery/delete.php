<?php 

	$id=$_GET['id'];
	$con= new mysqli('localhost','root','','ig');
	$query= "DELETE FROM image WHERE i_id=$id";
	if ($con->query($query)) {
		header('location: view.php');
	} else {
		echo mysqli_error($con);
	}

 ?>

 <?php 

	$fid=$_GET['fid'];
	$con= new mysqli('localhost','root','','igf');
	$query= "DELETE FROM feed WHERE f_id=$fid";
	if ($con->query($query)) {
		header('location: feedbackdash.php');
	} else {
		echo mysqli_error($con);
	}

 ?>

  <?php 

	$cid=$_GET['cid'];
	$con= new mysqli('localhost','root','','igc');
	$query= "DELETE FROM contact WHERE c_id=$cid";
	if ($con->query($query)) {
		header('location: contactdash.php');
	} else {
		echo mysqli_error($con);
	}

 ?>
 <?php 

	$did=$_GET['did'];
	$con= new mysqli('localhost','root','','dashboard');
	$query= "DELETE FROM dash WHERE d_id=$did";
	if ($con->query($query)) {
		header('location: viewdash.php');
	} else {
		echo mysqli_error($con);
	}

 ?>
