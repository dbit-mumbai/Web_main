<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "workshop";//counselling  //student_data
	// Create connection

	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
   		die("Connection failed: " . $conn->connect_error);
	}
	//echo "<br>Connected successfully<br>";

	$sql="SELECT * FROM detail";
	$record=mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration List</title>
	<style>
		blockquote{
				margin-left:20%;
				margin-right:20%;
		    	padding: 5px;
			    background-color:#FFF8DC;
		    	border-left: 2px solid black;
			}
			table , th,td {
				border: 1px solid black;
				border-collapse: collapse;
				padding: 5px;
			}
			#table tr:nth-child(even) {
    		background-color: #eee;
}
	</style>
</head>
<body>
<header style="background-color:#e67e22;">
			<table align="center">
			<tr>
			<td><img src="http://www.dbclmumbai.org/images/DBIT_logoPNG.png" weight="80" height="80" align="left"></td>
			<td><h2 align="center">DON BOSCO INSTITUTE OF TECHNOLOGY<br><center>CSI<center></h2></td>
			<td><img src="https://placementtalks.files.wordpress.com/2015/02/csi-logo.png" weight="80" height="80" align="right"></td>
			</tr>
			</table>
		</header>
		<hr>
		<br>
		<center>
		<blockquote align="center">
						<h2><span style="color:#9999;"><strong><span">Workshop Details</span></strong></	span></h2>
					</blockquote><br>
	<table id="table">
	<tr>
		<th>Date</th>
		<th>Time</th>
		<th>Speaker</th>
		<th>No of hours</th>
		<th>CSI members amount</th>
		<th>Non CSI members amount</th>
				
	</tr>

	<?php
		while($student=mysqli_fetch_assoc($record)){
			echo "<tr>";

			echo "<td>".$student['date']."</td>";

			echo "<td>".$student['time']."</td>";

			echo "<td>".$student['speaker']."</td>";

			echo "<td>".$student['hour']."</td>";

			echo "<td>".$student['amount']."</td>";

			echo "<td>".$student['money']."</td>";

			echo "</tr>";
		}

	?>
	</table>

	</center>
</body>
</html>