
<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $username, $password1, $database);

if(!$db){
    die("Connection error..".mysqli_connect_error());
}

$sql = " SELECT * FROM cust_details ORDER BY id ASC";
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
		<h1>Customer Database</h1>
		<!-- TABLE CONSTRUCTION -->
		<button><a href="curd\create.php">ADD USER</a></button>
		<table>
			<tr>
		
				<th>ID</th>
				<th>First Name</th>
				<th>last Name</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Total Amount</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<td><?php echo $rows['id'];?></td>
				<td><?php echo $rows['fname'];?></td>
				<td><?php echo $rows['lname'];?></td>
				<td><?php echo $rows['phonenumber'];?></td>
				<td><?php echo $rows['address'];?></td>
				<td><?php echo $rows['totalamount'];?></td>
				<td><a  href="curd\update1.php?id=<?php echo $rows['id']; ?>">Edit</a></td>
				<td><a  href="curd\delete1.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
				<td><a  href="curd\reset.php?id=<?php echo $rows['id']; ?>">Reset</a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
