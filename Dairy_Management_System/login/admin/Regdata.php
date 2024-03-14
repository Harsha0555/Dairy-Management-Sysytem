<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $username, $password1, $database);

if(!$db){
    die("Connection error..".mysqli_connect_error());
}
// else{
//     echo "You have successfully connected.";
// }

$sql = " SELECT * FROM register ";
$result = $db->query($sql);
$db->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Registration Database</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
			width: 100%;
		}

		h1 {
			text-align: center;
			color: blue;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
	</style>
</head>

<body>
	<section>
		<h1>Registration Database</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
		
				<th>USER NAME</th>
				<th>EMAIL</th>
				<th>PASSWORD</th>
				<th>DATE</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['username'];?></td>
				<td><?php echo $rows['email'];?></td>
				<td><?php echo $rows['password'];?></td>
				<td><?php echo $rows['Date'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
