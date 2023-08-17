<?php
	include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Upload Image View</title>

   <style>
		body{
			background-image: url('../images/1.jpg')
		}
		h2{
			position: relative;
			color: #fff;
			font-size: 40px;
			font-weight: 600;
			letter-spacing: 3px;
		}
		.glass{
			position: relative;
			color: #000;
			font-size: 30px;
			font-weight: 600;
			letter-spacing: 3px;
		}
		.container{
			position: relative;
			width: 900px;
			min-height: 200px;
			background: rgba(255,255,255,0.1);
			border-radius : 10px;
			justify-content: center;
			align-items: center;
			backdrop-filter: blur(5px);
			box-shadow: 0 25px 45px rgba(0,0,0,0.9);
			border: 1px solid rgba(255,255,255,0.2);
			border-right: 1px solid rgba(255,255,255,0.2);
			border-bottom: 1px solid rgba(255,255,255,0.2);
		}

   </style>

</head>

<body>
	<?php
		$path = $_SERVER["DOCUMENT_ROOT"]."MainPage.php";
		include("MainPage.php");
	?>
	<center>
	<div class="container">
	<h2>Need to Upload Another Image ????</h2>
	<p class ="glass">Upload another Image <a href="UploadIMG&Dets.php">Click Now</a></p>
	</div>
	<br/><br/><br/><br/><br/>
	<p>
	<?php
		$sql= "SELECT *
			   From images
			   ORDER BY I_ID DESC";
		$res= mysqli_query($imgConn, $sql);
		
		if(mysqli_num_rows($res)>0){
			while ($images = mysqli_fetch_assoc($res)){ 
				?>
				
			<div class ="alb">
			   <img src = "../images/upload/<?=$images['ImgLink']?>">
			</div>
		<?php	
		}
		} ?>
	</p>
	</center>
</body>
</html>