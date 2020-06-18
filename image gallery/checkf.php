<?php 
	$remail=$_POST['email'];
	$con= new mysqli('localhost','root','','ig');
	$query="SELECT * FROM image WHERE igemail='$remail'";
	$result=$con->query($query);
	$rows=mysqli_num_rows($result);
	$data=$result->fetch_object();
	if ($rows==1) {
		session_start();
		$_SESSION['id']=session_id();
		$_SESSION['i_id']=$data->i_id;
		$_SESSION['name']=$data->igname;
		$_SESSION['igcontact']=$data->igcontact;
		$_SESSION['igemail']=$data->igemail;
		$_SESSION['igpassword']=$data->igpassword;
		$_SESSION['igrpassword']=$data->igrpassword;
		$_SESSION['igaddress']=$data->igaddress;
		$_SESSION['igradio']=$data->igradio;
		$_SESSION['igvalid']=$data->igvalid;
		header('location: recoverpass.php');
	} 
	else {
		echo "<h1>INVALID EMAIL PLEASE ENTER A VALID EMAIL ID</h1>";
	}
	
 ?>
