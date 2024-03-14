<?php


$server_name = 'localhost';
$id = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $id, $password1, $database);

if(!$db){
    die("Connection error..".mysqli_connect_error());
}


if(isset($_POST['save']))
 {   
    $id = $_POST['id'];	
    $fname = $_POST['fname'];	
    $lname = $_POST['lname'];
    $phonenumber = $_POST['phonenumber'];
    $address = $_POST['address'];

    $query   = "SELECT * FROM cust_details WHERE id='$id'";
    $result = mysqli_query($db, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

if ($rows != 1) {
    $temp = mysqli_query($db,"INSERT INTO cust_details(id,fname,lname,phonenumber,address)
               values('$id','$fname','$lname','$phonenumber','$address')");
  
        if(!$temp){   
            echo "Error";
            header("Location: custregister.html");
        }else{
            // header("location: signin.html");
            // echo '<script> alert("Registration Successful") </script>';
            header("location: ..\customer.php");
    }
}else{
    echo '<script type="text/javascript">
    alert("This Customer_id is aldready used, Use New Customer Id");
    location="create.php";
    </script>';
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

<h3>CUSTOMER REGISTRATION</h3>

<div class="container">
  <form action="" method="post">
  
    <label for="id">Id</label>
    <input type="text" id="id" name="id" placeholder="Your id">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">

    <label for="phoneNo">Phone Number</label>
    <input type="text" id="phoneNo" name="phonenumber" placeholder="Phone Number">
  
    <label for="location">Address</label>
    <input type="text" id="loc" name="address" placeholder="Your Location">

    <input type="submit" name="save" value="Submit">
  </form>
</div>

</body>
</html>
