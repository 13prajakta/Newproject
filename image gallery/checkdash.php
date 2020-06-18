<?php 
	$dlemail=$_POST['dbemail'];
	$dlpassword=$_POST['dbpass'];
	$con= new mysqli('localhost','root','','dashboard');
	$query="SELECT * FROM dash WHERE demail='$dlemail' and dpassword='$dlpassword'";
	$result=$con->query($query);
	$rows=mysqli_num_rows($result);
	$data=$result->fetch_object();
	if ($rows==1) {
		session_start();
		$_SESSION['id']=session_id();
		$_SESSION['d_id']=$data->d_id;
		$_SESSION['name']=$data->dname;
		$_SESSION['demail']=$data->demail;
		$_SESSION['dpassword']=$data->dpassword;
		$_SESSION['dconfirmp']=$data->dconfirmp;
		header('location: dashboard.php');
	} else {
		echo "<h1>INVALID INPUT TYPE</h1>";
	}
	


 ?>