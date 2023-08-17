<?php  

$conn = mysqli_connect('localhost', 'root', '', 'online fashion store');

if (!$conn) {
	echo "Connection Failed!";
	exit();
}

?>