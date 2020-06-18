
  <?php 

	$c_name = $_POST['cname'];
	$c_contact = $_POST['cnumber'];
	$c_email = $_POST['cemail'];
	$c_address = $_POST['caddress'];
	$c_gender = $_POST['cRadio'];
	$c_reach = $_POST['cselect'];
	$c_msg = $_POST['cmsg'];

	$con = new mysqli('localhost','root','','igc');
	$query = "INSERT INTO contact VALUES(NULL,'$c_name','$c_contact','$c_email','$c_address','$c_gender','$c_reach','$c_msg')";
	if ($con->query($query)) {
		header('location: contactdash.php');
	} else {
		echo mysqli_error($con);
	}
 ?>