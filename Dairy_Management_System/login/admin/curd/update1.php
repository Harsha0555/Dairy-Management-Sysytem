<?php 

$server_name = 'localhost';
$id = 'root';
$phonenumber1 = '';
$database = 'dairy';

$conn= new mysqli($server_name, $id, $phonenumber1, $database);

if(!$conn){
    die("Connection error..".mysqli_connect_error());
}

if (isset($_POST['update'])) {

           $id = $_POST['id'];	
           $fname = $_POST['fname'];	
           $lname = $_POST['lname'];
           $phonenumber = $_POST['phonenumber'];
           $address = $_POST['address'];

        $sql = "UPDATE cust_details SET  fname='$fname', lname='$lname',phonenumber='$phonenumber',address='$address' WHERE id='$id'"; 
        $result = $conn->query($sql); 

        if ($result == TRUE) {

            $sql1 = "UPDATE milk SET Customer_name = '$fname' WHERE id='$id'";
            $result1 = $conn->query($sql1);
            $sql2 = "UPDATE ghee SET Customer_name = '$fname' WHERE id='$id'";
            $result2 = $conn->query($sql2);
            $sql3 = "UPDATE egg SET Customer_name = '$fname' WHERE id='$id'";
            $result3 = $conn->query($sql3);
            $sql4 = "UPDATE butter SET Customer_name = '$fname' WHERE id='$id'";
            $result4 = $conn->query($sql4);
            $sql5 = "UPDATE cheese SET Customer_name = '$fname' WHERE id='$id'";
            $result5 = $conn->query($sql5);
        }
        if (($result1 == TRUE) or ($result2 == TRUE) or ($result3 == TRUE) or ($result4 == TRUE) or ($result5 == TRUE)) {
            echo "Record updated successfully.";
            header("location: ..\customer.php");
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 

if (isset($_GET['id'])) {
    $id = $_GET['id']; 
    $sql = "SELECT * FROM cust_details WHERE id='$id'";
    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $fname = $row['fname'];
            $lname = $row['lname'];
            $phonenumber  = $row['phonenumber'];
            $address = $row['address'];
        } 
      }
    }      
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h2>UPDATE</h2>

<div class="container">
  <form action="" method="post">
  
    <label for="id">Id</label>
    <input type="text" id="id" name="id" placeholder="Your id" value="<?php echo $id; ?>"  readonly='readonly'>

    <label for="id">Id</label>
    <input type="text" id="fname" name="fname" placeholder="Your name.." value="<?php echo $fname; ?>">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name.." value="<?php echo $lname; ?>">

    <label for="phoneNo">Phone Number</label>
    <input type="text" id="phoneNo" name="phonenumber" placeholder="Phone Number" value="<?php echo $phonenumber; ?>">
  
    <label for="location">Address</label>
    <input type="text" id="loc" name="address" placeholder="Your Location" value="<?php echo $address; ?>">

    <input type="submit" name="update" value="Update">
  </form>
</div>

</body>
</html>


