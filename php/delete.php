<?php
session_start();

$conn= mysqli_connect("localhost","root","");
$db = mysqli_select_db($conn,"online fashion store");

if(isset($_POST['delete']))
{
    
    

    $id = "{$_SESSION['Payment_ID']}";

    $query_run = mysqli_query($conn, "DELETE FROM payment WHERE Payment_ID='$id'");

    if($query_run){
        echo '<script>alert("Data Deleted"); </script>';
        header("location: ../payment_history.php");
    }else{
        echo'<script> alert("Data Not Delete");</script>';
    }
}
?>

<!--echo"<form action='delete.php' method='post'>";
                                                echo"<input type='hidden' name='His_ID' value='.$row['His_ID'].'>";
                                                echo"<td> <input type='submit' name='delete' class='btn' value='DELETE'></td>";
                                         echo"</form>";
                                         echo"</tr>";--->
                                        