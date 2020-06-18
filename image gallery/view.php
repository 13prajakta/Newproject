<?php 
	
	$con = new mysqli('localhost','root','','ig');
	$query = "SELECT * FROM image";
	$result = $con->query($query); 

 ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>view</title>
	 </head>
	 <body>
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-12">
	 				
	 			
	 	<center>
	 		<h1>VIEW TABEL</h1>
	 		<a href="logout.php"><h1>LOGOUT</h1></a>
	 		<table border="1" cellpadding="20" cellspacing="0">
	 			<tr>
	 				<td>sr.no</td>
	 				<td>user name</td>
	 				<td>user contact</td>
	 				<td>user email</td>
	 				<td>user password</td>
	 				<td>user Re-password</td>
	 				<td>user address</td>
	 				<td>user gender</td>
	 				<td>user valid</td>
	 				<td>Action</td>
	 			</tr>
	 			<?php 
	 			while ($data = $result->fetch_object()) {
	 				echo"<tr>";
	 				echo "<td>$data->i_id</td>";
	 				echo "<td>$data->igname</td>";
	 				echo "<td>$data->igcontact</td>";
	 				echo "<td>$data->igemail</td>";
	 				echo "<td>$data->igpassword</td>";
	 				echo "<td>$data->igrpassword</td>";
	 				echo "<td>$data->igaddress</td>";
	 				echo "<td>$data->igradio</td>";
	 				echo "<td>$data->igvalid</td>";
	 				echo "<td>";
	 					echo "<a href='edit.php?id=$data->i_id'>EDIT</a>";
	 					echo "<a href='delete.php?id=$data->i_id'>DELETE</a>";
	 				echo "</td>";
	 				echo "</tr>";
	 			}
	 			 ?>
	 		    </table>
	 	     </center>
	 	   </div>
	     </div>
	   </div>
	 </body>
 </html>