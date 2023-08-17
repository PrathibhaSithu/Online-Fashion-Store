<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Image Upload</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/upload.css">

</head>
<body>
	<?php
		$path = $_SERVER["DOCUMENT_ROOT"]."MainPage.php";
		include("MainPage.php");
	?>
	<section>
		<div class="color"></div>
		<div class="color"></div>
		<div class="color"></div>
		<div class="box">
			<div class="square" style="--i:0;"></div>
			<div class="square" style="--i:1;"></div>
			<div class="square" style="--i:2;"></div>
			<div class="square" style="--i:3;"></div>
			<div class="square" style="--i:4;"></div>
			<div class="square" style="--i:5;"></div>
			<div class="square" style="--i:6;"></div>
			<div class="square" style="--i:7;"></div>
			<div class="square" style="--i:8;"></div>
			<div class="square" style="--i:9;"></div> 


	<?php
		error_reporting(0);
		include ("config.php");
		$query = "select * from images";
		$data = mysqli_connect($imgConn,$query);
		$total = mysqli_num_rows($data);

		if(isset($_GET['error'])):
	?>
	<p>
		<?php
			echo $_GET['error'];
		?>
	</p>
	<?php
		endif
	?>
	
	<div class="container">
	<div class="form">
		<h2>Upload Images</h2><br/>
		<form action ="upload.php" method ="post" enctype = "multipart/form-data">
		<div class="inputBox">
		<input type ="file" name ="uImage">
		</div>
		<div class="inputBox">
		<input type ="submit" name ="submit" value="Upload"> 
		</div>
	</form>
	</div>
	</div>
	</div>
	</section>
</body>
</html>