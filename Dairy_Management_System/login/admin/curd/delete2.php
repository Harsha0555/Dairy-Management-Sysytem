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

    $query   = "SELECT * FROM cust_details WHERE id ='$id'";
    $resulto = mysqli_query($conn, $query);
    $rowso = mysqli_num_rows($resulto);
    
    if ($resulto->num_rows > 0) 
    {
        while($rowo = $resulto->fetch_assoc())
        {
            // $id = $rowo["id"];
            $fname = $rowo["fname"];
            $lname = $rowo["lname"];
            $phonenumber = $rowo["phonenumber"];
            $address = $rowo["address"];
            $totalamount = $rowo["totalamount"];

            $sql = "INSERT INTO bin (id,fname,lname,phonenumber,address,totalamount)
            values('$id','$fname','$lname','$phonenumber','$address','$totalamount')";
            $result = $conn->query($sql);
            // $rows = mysqli_num_rows($result);
    
    if ($result == TRUE) {
        $temp = mysqli_query($conn,"DELETE FROM cust_details WHERE id = '$id'");

        if ($temp) {
            echo "Record deleted successfully.";
            header("location: ..\customer.php");

    }else{

        echo "Error:" . $temp . "<br>" . $conn->error;
        header("location: ..\customer.php");
     }
    } else{

        echo "Error:" . $temp . "<br>" . $conn->error;
        header("location: ..\customer.php");
}
}
}else{
  echo "Error1";
  header("location: ..\customer.php");
}
}

?>