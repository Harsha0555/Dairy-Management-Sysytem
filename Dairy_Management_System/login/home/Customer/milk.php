
<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $username, $password1, $database);

if(!$db){
    die("Connection error..".mysqli_connect_error());
}

$sql = " SELECT * FROM milk ";
$result = $db->query($sql);
$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Registration Database</title>
	
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
		<h1>Milk Database</h1>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
		
				<th>ID</th>
				<th>Customer Name</th>
				<th>Milk Quantity</th>
				<th>Price</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['Customer_name'];?></td>
				<td><?php echo $rows['Milk_quantity'];?></td>
				<td><?php echo $rows['price'];?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
