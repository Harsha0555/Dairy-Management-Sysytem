
<?php
$server_name="localhost";
$username="root";
$password1="";
$database_name="dairy";

$conn=mysqli_connect($server_name,$username,$password1,$database_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['save']))
{	
     $id = $_POST['id'];
	 $Customer_name = $_POST['Customer_name'];
	 $Butter_quantity = $_POST['Butter_quantity'];
     $price = $Butter_quantity * 350;
	
    $query   = "SELECT * FROM `cust_details` WHERE id='$id'
                AND fname ='$Customer_name'";
    $result = mysqli_query($conn, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    $sqlqw = "UPDATE cust_details SET totalamount = totalamount + $price WHERE id = $id ";
    $resulto = mysqli_query($conn, $sqlqw) or die(mysql_error());

    if ($rows == 1) {

    mysqli_query($conn,"INSERT INTO butter (id,Customer_name,Butter_quantity,price)
    VALUES ('$id','$Customer_name','$Butter_quantity','$price')");
        
        echo '<script type="text/javascript">
        alert("entered successfully to database");
        </script>';     
}   
	 else
     {
        echo '<script type="text/javascript">
        alert("Register in Customer Registration");
        location="custregister.html";
        </script>'; 
	 }
	 mysqli_close($conn);

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>INVOICE</title>
	
	<style>
		div {
    margin: 3px;
    width: 500px;
    height: 600px;
    background-color: rgb(222, 232, 232);
    border-radius: 10px;
}
hr {
    /* border: 3px dotted gray; */
    border-top: 5px dotted gray;
}
td, th {
    border-collapse: collapse;
    padding-right: 300px;
}

h4, h1 {
    text-align: center;
}

P{
    text-align: center;
}

button {
    border: 2px black;
    border-radius: 30px;
    color: white;
    width: 150px;
	padding: 3px;
    margin-left: 170px;
    background-color: blue;
}
	</style>
</head>

<body>
<div>
      <h1>INVOICE</h1>
      <p>Address: Rajarajswari College Of Engineering.</p>
      <p>Tel: 9876543021</p>
      <hr />
      <h4>CASH RECEIPT</h4>
	  <hr />
      <table>
        <tr>
          <th>Description</th>
          <th>Price/lt or kg</th>
        </tr>
		<tr>
          <td>ID</td>
          <td><?php echo $id;?></td>
        </tr>
		<tr>
          <td>Customer_Name</td>
          <td><?php echo $Customer_name;?></td>
        </tr>
		<tr>
          <td>Butter_Quantity</td>
          <td><?php echo $Butter_quantity;?></td>
        </tr>
		</table>
      <hr />
    <table>
        <tr>
          <th>Total</th>
          <th><?php echo $price;?>Rs</th>
        </tr>
      </table>
      <hr>
      <p>THANK YOU!</p>
	  <p>This is a Invoice which Confirms that You the Customer has Sold your product us Fairly and Legally</p>
      <button id="printpagebutton" onclick="printpage()">PRINT</button>
    </div>
    <a href="productpage.html">Go Back</a>


    <script>
            function printpage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        //Print the page content
        window.print()
        printButton.style.visibility = 'visible';
    }
    </script>
  </body>
</html>