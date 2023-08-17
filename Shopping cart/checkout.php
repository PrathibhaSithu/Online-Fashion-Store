<?php

session_start();

    $c_id = "{$_SESSION['c_id']}";
    

    echo $c_id;

//The connection object
$con=new mysqli("localhost","root","","online fashion store");
// Check connection
if($con->connect_error){
die("Connection failed: " . $con->connect_error);
}
if(isset($_POST["checkoutbtn"])){

    $total=$_POST["paidamount"];
    

   $stmt = $con->prepare("INSERT INTO order2(Total,c_id)values(?,$c_id)");
   $stmt->bind_param("d",$total);
   $stmt->execute();
   echo "Succesfully";



   $stmt->close();
   $con->close();

}
?>


