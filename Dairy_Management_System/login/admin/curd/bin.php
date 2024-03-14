
<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$conn = new mysqli($server_name, $username, $password1, $database);

if(!$conn){
    die("Connection error..".mysqli_connect_error());
}

$sql = " SELECT * FROM bin ORDER BY id ASC";
$result = $conn->query($sql);

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
	
	    $query   = "SELECT * FROM bin WHERE id ='$id'";
        $resulto = mysqli_query($conn, $query);
		$rowso = mysqli_num_rows($resulto);
		
		if ($result->num_rows > 0) 
		{
			while($rowso = $resulto->fetch_assoc())
			{
				// $id = $rows["id"];
				$fname = $rowso["fname"];
				$lname = $rowso["lname"];
				$phonenumber = $rowso["phonenumber"];
				$address = $rowso["address"];
				$totalamount = $rowso["totalamount"];
	
				$sql = "INSERT INTO cust_details (id,fname,lname,phonenumber,address,totalamount)
				values('$id','$fname','$lname','$phonenumber','$address','$totalamount')";
				$resultoo = $conn->query($sql);
				// $rows = mysqli_num_rows($result);
		
		if ($resultoo == TRUE) {
			$temp = mysqli_query($conn,"DELETE FROM bin WHERE id = '$id'");
	
			if ($temp) {
				echo "Record deleted successfully.";
				header("location: bin.php");
	
		}else{
	
			echo "Error:" . $temp . "<br>" . $conn->error;
			header("location: bin.php");
		 }
		} else{
	
			echo "Error:" . $temp . "<br>" . $conn->error;
			header("location: bin.php");
	}
			}
		}
	}

$conn->close();
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
		<h1>Bin</h1>
		<!-- TABLE CONSTRUCTION -->
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
				<td><a  href="bin.php?id=<?php echo $rows['id']; ?>">Move to DataBase</a></td>
			</tr>
			<?php
				}
			?>
		</table>
	</section>
</body>

</html>
