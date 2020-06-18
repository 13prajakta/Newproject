<?php 
	$email=$_POST['email'];
	$password=$_POST['password'];
	$con= new mysqli('localhost','root','','ig');
	$query="SELECT * FROM image WHERE igemail='$email' and igpassword='$password'";
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
		

	if(!empty($_POST["remember"])) {
		setcookie ("email",$_POST["email"],time()+ 3600);
		setcookie ("password",$_POST["password"],time()+ 3600);
		echo "Cookies Set Successfuly";
			header('location: home.php');
	} else {
		setcookie("email","");
		setcookie("password","");
		header('location: home.php');
	}
	
	} 
	else {
		echo "<h1>INVALID INPUT TYPE</h1>";
	}
	
 ?>
