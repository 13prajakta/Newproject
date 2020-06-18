 <?php 

	$f_name = $_POST['fdname'];
	$f_contact = $_POST['fdcontact'];
	$f_email = $_POST['fdemail'];
	$f_address = $_POST['fdaddress'];
	$f_comment = $_POST['fdcomment'];

	$con = new mysqli('localhost','root','','igf');
	$query = "INSERT INTO feed VALUES(NULL,'$f_name','$f_name','$f_email','$f_address','$f_comment')";
	if ($con->query($query)) {
		header('location: feedbackdash.php');
	} else {
		echo mysqli_error($con);
	}
 ?>
