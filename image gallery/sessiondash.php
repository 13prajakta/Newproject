<?php 
	session_start();
	$did=session_id();
	if ($_SESSION['id']!=$did) {
		session_destroy();
		header('location : logindash.php');
	} 
	

 ?>