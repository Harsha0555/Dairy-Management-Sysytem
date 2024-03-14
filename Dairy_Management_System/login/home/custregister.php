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
            // // echo '<script> alert("Registration Successful") </script>';
            echo '<script type="text/javascript">
            alert("Registration Successful");
            location="home/../productpage.html";
            </script>';
    }
}else{
    echo '<script type="text/javascript">
    alert("This Customer_id is aldready used, Use New Customer Id");
    location="custregister.html";
    </script>';
}
}

?>