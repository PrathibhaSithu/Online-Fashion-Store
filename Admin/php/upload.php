<?php
	if(isset($_POST['submit']) && isset($_FILES['uImage'])){
		include "config.php";
		echo "<pre>";
		print_r($_FILES['uImage']);
		echo "</pre>";
		
		
		$img_name = $_FILES['uImage']['name'];
		$img_size = $_FILES['uImage']['size'];
		$tmp_name = $_FILES['uImage']['tmp_name'];
		$error = $_FILES['uImage']['error'];
		
		if ($error === 0){
			$imgEx = pathinfo($img_name, PATHINFO_EXTENSION);
			$imgEx_lc = strtolower($imgEx);
			
			$allowExs = array("jpg", "jpeg", "png", "svg");
			
			if(in_array($imgEx_lc, $allowExs)){
				$newIMG = uniqid("IMG-",true).'.' .$imgEx_lc;
				$imgPath = '../images/upload/'.$newIMG;
				move_uploaded_file($tmp_name, $imgPath);
				
				// insert into database
				$sql = "INSERT INTO images(ImgLink) 
				        VALUES('$newIMG')";
						
				mysqli_query($imgConn, $sql);
				header("Location: viewIMG.php");
			}
			else{
				$emsg = "An error occurred !";
				header("location : UploadIMG&Dets.php?error=$emsg");
			}
		}
		else{
			$emsg = "You cannot upload this file type";
			header("location : UploadIMG&Dets.php?error=$emsg");
		}
	}
	else{
		header("location : UploadIMG&Dets.php");
	}


?>