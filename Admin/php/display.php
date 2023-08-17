<?php
		include ("config.php");
		error_reporting(0);
		
		$query = "select * from images";
		$data = mysqli_connect($imgConn,$query);
		$total = mysqli_num_rows($data);
		echo $total;
	
	/*if($total != 0){
		echo "Table has records";
	}
	else{
		echo "No records found !";
	}*/
?>