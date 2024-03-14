<?php

$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$db = new mysqli($server_name, $username, $password1, $database);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}else{
    echo "Connection successful to database" ;
}


$username = $_POST['username'];
$password = $_POST['password'];

$query   = "SELECT * FROM `register` WHERE username='$username'
            AND password ='" . md5($password) . "'";
$result = mysqli_query($db, $query) or die(mysql_error());
$rows = mysqli_num_rows($result);

if ($rows == 1) {
    
    $admin_username = 'admin';
    $admin_password = 'admin123';

    if ($username == $admin_username  &&  $password == $admin_password)
    {
        header("Location: admin\dummy.html");
    }
    else{
    // echo '<script> alert("login successful") </script>';
    mysqli_query($db,"INSERT INTO login(username,password)
    values('$username','" . md5($password) . "')");
    header("Location: home\productpage.html");
    }
}
else {
    echo '<script type="text/javascript">
    alert("No login details found in the database");
    location="logproject.html";
    </script>';

}

$db->close();
?>
