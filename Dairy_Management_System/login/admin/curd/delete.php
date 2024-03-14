<?php 


$server_name = 'localhost';
$username = 'root';
$password1 = '';
$database = 'dairy';

$conn = new mysqli($server_name, $username, $password1, $database);

if(!$conn){
    die("Connection error..".mysqli_connect_error());
}else{
    echo "Connection successful to database" ;
}

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM cust_details WHERE id = '$id'";
    $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";
        header("location: ..\customer.php");

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

     }
    } else{

        echo "Error:" . $sql . "<br>" . $conn->error;
}

?>