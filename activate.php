<?php include('db_conn.php') ?>
<?php

if(isset($_REQUEST['token'])){
     $token = $_REQUEST['token'];


$sql = "UPDATE register SET activated='1' WHERE token='$token'";

if (mysqli_query($conn, $sql)) {
  echo "Your Account activated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

}

