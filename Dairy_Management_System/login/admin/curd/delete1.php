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

        $sql1 = "DELETE FROM milk WHERE id = '$id'";
        $result1 = $conn->query($sql1);
        $sql2 = "DELETE FROM ghee WHERE id = '$id'";
        $result2 = $conn->query($sql2);
        $sql3 = "DELETE FROM egg WHERE id = '$id'";
        $result3 = $conn->query($sql3);
        $sql4 = "DELETE FROM butter WHERE id = '$id'";
        $result4 = $conn->query($sql4);
        $sql5 = "DELETE FROM cheese WHERE id = '$id'";
        $result5 = $conn->query($sql5);

        if (($result1 == TRUE) or ($result2 == TRUE) or ($result3 == TRUE) or ($result4 == TRUE) or ($result5 == TRUE))  {
        echo "Record deleted successfully.";
        header("location: ..\customer.php");
        }
    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

     }
    } else{

        echo "Error:" . $sql . "<br>" . $conn->error;
}

?>