<?php 
	
	$con = new mysqli('localhost','root','','dashboard');
	$query = "SELECT * FROM dash";
	$result = $con->query($query); 

 ?>
 <!DOCTYPE html>
 <html>
	 <head>
	 	<title>view</title>
	 </head>
	 <body>
	 	<center>
	 		<h1>VIEW TABEL</h1>
	 		<a href="logout.php"><h1>LOGOUT</h1></a>
	 		<table border="1" cellpadding="20" cellspacing="0">
	 			<tr>
	 				<td>sr.no</td>
	 				<td>admin name</td>
	 				<td>admin email</td>
	 				<td>admin password</td>
	 				<td>admin confirm password</td>
	 				<td>Action</td>
	 			</tr>
	 			<?php 
	 			while ($data = $result->fetch_object()) {
	 				echo"<tr>";
	 				echo "<td>$data->d_id</td>";
	 				echo "<td>$data->dname</td>";
	 				echo "<td>$data->demail</td>";
	 				echo "<td>$data->dpassword</td>";
	 				echo "<td>$data->dconfirmp</td>";
	 				echo "<td>";
	 					echo "<a href='editdash.php?did=$data->d_id'>EDIT</a>";
	 					echo "<a href='delete.php?did=$data->d_id'>DELETE</a>";
	 				echo "</td>";
	 				echo "</tr>";
	 			}
	 			 ?>
	 		</table>
	 	</center>
	 </body>
 </html>