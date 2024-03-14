<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $username, $password1, $database);

if(!$db){
    die("Connection error..".mysqli_connect_error());
}
else{
    echo "You have successfully connected.";
}

if(isset($_POST['username']) && ($_POST['password'])){
    
    $username = $_POST['username'];	
    $email = $_POST['email'];	
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $query   = "SELECT * FROM register WHERE username='$username' AND password ='" . md5($password) . "'";
    $result = mysqli_query($db, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

if ($cpassword == $password){

    if ($rows != 1) {
    $temp = mysqli_query($db,"INSERT INTO register(username,email,password)
               values('$username','$email','" . md5($password) . "')");
  
        if(!$temp){   
            echo "Error";
        }else{
            header("location: logproject.html");

            // echo '<script type="text/javascript">
            // alert("Registration Successful");
            // location="logproject.html";
            // </script>';
        } 
    }else{
        // echo '<script> alert("Password is invalid") </script>';
        // echo "Password Error";
        echo '<script type="text/javascript">
        alert("User is already Registered");
        location="logproject.html";
        </script>';
    }
     
}else{
    // echo '<script> alert("Password is invalid") </script>';
    // echo "Password Error";
    echo '<script type="text/javascript">
    alert("Password is invalid");
    location="logproject.html";
    </script>';
    }
}

?>